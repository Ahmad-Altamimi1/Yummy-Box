<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Exception;
use Hash;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    // for google driver

    public function redirectToGoogle()
    {

        return Socialite::driver('google')->redirect();
    }
    // for Github facebook

    public function redirectToFacebook()
    {

        return Socialite::driver('facebook')->redirect();
    }
    // for Github driver
    public function redirectToGithub()
    {

        return Socialite::driver('github')->redirect();
    }
    // for google handele

    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
            $finduser = User::where('social_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect()->route('home');
            } else {
                $newUser = User::Create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'social_type' => 'google',
                    'password'=>Hash::make($user->password) ,
                ]);
                Auth::login($newUser);
                return redirect()->route('home');

            }
        }catch(Exception $e){
            dd($e->getMessage());
        }

    }
    // for facebook handle
    public function handleFacebookCallback()
    {
        try {

            $user = Socialite::driver('facebook')->user();
            $finduser = User::where('social_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect()->route('home');
            } else {
                $newUser = User::Create([
                    'name' => $user->name,
                    'social_id' => $user->id,
                    'social_type' => 'facebook',
                    'password' => Hash::make($user->password),
                ]);
                Auth::login($newUser);
                return redirect()->route('home');

            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }

    }
    // for github handle
    public function handleGithubCallback()
    {
        try {

            $user = Socialite::driver('github')->user();
            $finduser = User::where('social_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect()->route('home');
            } else {
                $newUser = User::Create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'social_type' => 'github',
                    'password' => Hash::make($user->password),
                ]);
                Auth::login($newUser);
                return redirect()->route('home');

            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }

    }
    
}