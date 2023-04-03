<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{

    protected function validationErrorMessages()
    {
        return [
            'token.required' => 'The token field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'password.required' => 'The password field is required.',
            'password.confirmed' => 'The password confirmation does not match.',
            'password.min' => 'The password must be at least 8 characters.',
        ];
    }

    protected function rules()
    {
        return [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ];
    }

    protected function sendResetFailedResponse(Request $request, $response)
    {
        return redirect()->back()
            ->withInput($request->only('email'))
            ->withErrors(['email' => trans($response)]);
    }

    public function broker()
    {
        return Password::broker();
    }

    protected function resetPassword($user, $password)
    {
        $user->password = Hash::make($password);
        $user->save();
        Auth::login($user);
    }

    public function showResetForm(Request $request, $token)
    {
        return view('forgot_password.reset', ['token' => $token, 'email' => $request->email]);
    }

    
    public function reset(Request $request)
    {
        $request->validate($this->rules(), $this->validationErrorMessages());
    
        // Get the password reset credentials from the request
        $credentials = $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );
    
        // Reset the user's password
        $response = $this->broker()->reset(
            $credentials, function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );
    
        // Redirect the user back to the password reset form if there was an error
        if ($response == Password::INVALID_TOKEN) {
            return $this->sendResetFailedResponse($request, $response);
        }
    
        // If the password was successfully reset, redirect the user to the login page
        return $response == Password::PASSWORD_RESET
                    ? redirect()->route('sesi')->with('status', trans($response))
                    : $this->sendResetFailedResponse($request, $response);
    }
    
}
