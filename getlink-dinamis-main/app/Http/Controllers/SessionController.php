<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\paket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
// use RealRashid\SweetAlert\Facades\Alert;
use Alert;
use App\Models\getlink;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;

class SessionController extends Controller
{
    //
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

        $jumlah_user = User::all()->count();
        if(Auth::attempt($infologin)){
            Alert::success('Berhasil', 'Kamu Berhasil Login');
            if(Auth::User()->usertype === 'member'){
                return redirect('/testing')->with('success','Berhasil Login');
            }
            elseif(Auth::User()->usertype === 'superadmin'){
                return redirect('/');
            }
            
        }else{
            Alert::error('Kesalahan', 'Password atau Email Salah');
            return redirect('sesi')->with('toast_error','Password atau Email Salah');
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

        

        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
            
        ];

        User::create($data);
        Alert::success('Selamat', 'Kamu Berhasil Registrasi');
        return redirect('/sesi')->with('success','Berhasil Registasi');
    }
    
    function logout(){
        Auth::logout();
        Alert::success('Berhasil', 'Kamu Berhasil Log Out');
        return redirect('sesi')->with('success','Berhasil Logout');
    }
}
