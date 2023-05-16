<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index(){
        return view('sesi.index');
    }

    function login(Request $request){
        Session::flash('email',$request->email);
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::User()->role === 'admin') {
                return response()->json(['success' => true, 'redirect' => '/admin_get']);
            } elseif (Auth::User()->role === 'user') {
                return response()->json(['success' => true, 'redirect' => '/dashboard_user' , 'message' => 'Berhasil Login']);
            }
        } else {
            return response()->json(['success' => false, 'message' => 'Password Atau Email Salah']);
        }
    }

    function register(){
        return view('sesi.registasi');
    }

    function create(Request $request){
        Session::flash('name',$request->name);
        Session::flash('email',$request->email);

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8',
        ],[
            'name.required' => 'Username Harus Di ISi',
            'email.required' => 'Email Harus Di ISi',
            'email.email' => 'Harap Masukkan Email Yang Valid',
            'email.unique' => 'Email Ini Sudah Di Digunakan , Harap Masukkan Email Yang Lain',
            'password.required' => 'Password Harus Di ISi',
            'password.min' => 'Password Minimal 8 karakter',
        ]);


        if ($request->password == $request->confirmpassword) {
            $data = [
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                
            ];
        } else {
            return response()->json(['success' => false, 'message' => 'Konfirmasi Password Tidak Sama dengan Password']);
        }

        User::create($data);
Auth::login(User::where('email', $request->email)->first());

        if (Auth::check()) {
            if (Auth::user()->role === 'admin') {
                return response()->json(['success' => true, 'redirect' => '/admin_get']);
            } elseif (Auth::user()->role === 'user') {
                return response()->json(['success' => true, 'redirect' => '/dashboard_user', 'message' => 'Berhasil Login']);
            }
        } else {
            return response()->json(['success' => false, 'message' => 'Terjadi Kesalahan saat Login']);
        }
    }
    
    function logout(){
        Auth::logout();
        return redirect('/')->with('success','Berhasil Logout');
    }

    function forgot() {
        return view('forgot_password.index');
    }
}
