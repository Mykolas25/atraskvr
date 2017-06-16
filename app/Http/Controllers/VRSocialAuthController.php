<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Providers\SocialAccountService;


class VRSocialAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();

    }

    /**
     * Obtain the user information from google.
     *
     * @return Response
     */
    public function handleProviderCallback(SocialAccountService $service)
    {
//        $state = $request->get('state');
//        $request->session()->put('state',$state);
//
//      try {
//
        $user = $service->createOrGetUser(Socialite::driver('google')->user());

        auth()->login($user);

        return redirect()->to('/home');
//
//        return redirect()->to('/home');
//          }catch (Exception $e) {
//            return redirect('auth/google');
////        session()->regenerate();

}

//    public function handleProviderCallback(Request $request, SocialAccountService $service)
//    {
//
//        try {
//            $user = Socialite::driver('google')->user();
//
//            $userModel = new User;
//            $createdUser = $userModel->addNew($user);
//            Auth::loginUsingId($createdUser->id);
//            return redirect()->route('home');
//        } catch (Exception $e) {
//            return redirect('auth/facebook');
//        }
//    }
}