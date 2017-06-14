<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 5/25/2017
 * Time: 11:19 AM
 */
namespace App\Providers;
use App\Models\SocialAccountModel;
use App\Models\VRUsers;
use App\User;
use App\VRSocialAccountModel;
use Laravel\Socialite\Contracts\User as ProviderUser;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class SocialAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $account = VRSocialAccountModel::whereOauth_provider('google')
            ->whereOauth_uid($providerUser->getId())
            ->first();
        if ($account) {
            return $account->user;
        } else {
            $account = new VRSocialAccountModel([
                'oauth_uid' => $providerUser->getId(),
                'oauth_provider' => 'google'
            ]);
           $user = VRUsers::whereEmail($providerUser->getEmail())->first();
            if (!$user) {
                $user = VRUsers::create([
                    'id' => uuid::uuid4(),
                    'email' => $providerUser->getEmail(),
                    'first_name' => $providerUser->getName(),
                    'last_name' => $providerUser->getNickname(),
                ]);
            }
//            dd($account->user());
            $acc = $account->user()->associate($user)->toArray();
            $acc['id'] = $acc['user_id'];
            $account->save();
            return $user;
        }
    }
}