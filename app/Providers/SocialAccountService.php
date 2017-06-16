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

                $fullName = $providerUser->getName();
                //extract first name only
                $getName = strtok($fullName, ' ');

                //extract last name only
                $getLastName = substr($fullName, strpos($fullName, " ") + 1);

                $user = VRUsers::create([
                    'id' => uuid::uuid4(),
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                    'first_name' => $getName,
                    'last_name' => $getLastName
                ]);
//
                $account->user()->associate($user)->toArray();
                $account->save();

            }
        }  return $user;
    }
}