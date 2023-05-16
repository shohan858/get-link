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
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            if ($e instanceof ConnectException) {
                return redirect()->back()->with('error', 'Ada yang salah dengan internet Anda.');
            }
            return redirect('/sesi');
        }

        $finduser = User::where('google_id', $user->getId())->first();
        $findUsername = User::where('email', $user->getEmail());
        if ($finduser) {
            Auth::login($finduser);
            return redirect()->intended('/regular');
        } else if ($findUsername->exists()) {
            $findUsername = $findUsername->first();
            if ($findUsername->google_id == null) {
                // update google_id jika berbeda
                $findUsername->google_id = $user->getId();
                $findUsername->update();
            }
            Auth::login($findUsername);
            return redirect()->intended('/regular');
        } else {
            // buat user baru jika belum terdaftar
            $newUser = new User();
            $newUser->name = $user->getName();
            $newUser->email = $user->getEmail();
            $newUser->password = bcrypt('12345'); // generate password acak
            $newUser->google_id = $user->getId();
            $newUser->save();
        
            Auth::login($newUser);
            return redirect()->intended('/regular');
        }
    }
}
