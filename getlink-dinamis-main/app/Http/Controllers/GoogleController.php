<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Alert;
class GoogleController extends Controller
{
    //
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $finduser = User::where('google_id', $user->getId())->first();
        if ($finduser) {
            Auth::login($finduser);
            return redirect()->intended('/dashboard');
        } else {
            // buat user baru jika belum terdaftar
            $newUser = new User();
            $newUser->name = $user->getName();
            $newUser->email = $user->getEmail();
            $newUser->password = bcrypt('12345'); // generate password acak
            $newUser->google_id = $user->getId();
            $newUser->save();
    
            Auth::login($newUser);
            return redirect()->intended('/dashboard');
        }
    }
}
