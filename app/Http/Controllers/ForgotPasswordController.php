<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('forgot_password.password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        try {
            $status = Password::sendResetLink(
                $request->only('email')
            );

            if ($status === Password::RESET_LINK_SENT) {
                return back()->with(['status' => 'Email sudah berhasil terkirim. Silakan periksa email Anda.']);
            } else {
                return back()->withErrors(['email' => __($status)]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['email' => 'Terjadi masalah dengan koneksi internet. Silakan coba lagi nanti.']);
        }
    }
}
