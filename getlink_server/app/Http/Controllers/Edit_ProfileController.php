<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Edit_ProfileController extends Controller
{
    public function edit_profile($id)
    {
        $user = User::find($id);
        if(Auth::User()->role == 'admin'){
            return view('admin.admin_pages.edit_profile_admin', compact('user'));
        }else{
            return view('Dashboard_User.edit_profile_user', compact('user'));
        }
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png,svg',
        ], [
            'username.required' => 'nama tidak boleh kosong!',
            'email.required' => 'email tidak boleh kosong!'
        ]);


        // $user = User::findOrFail($id);
        $user = Auth::user();
        $user->name = $request->username;
        $file = $request->hasFile('gambar');

        if($request->hasFile('gambar')){
            $name_image = Carbon::now()->timestamp . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('gambar'), $name_image);
            $user->img = $name_image;
        } 
        $user->email = $request->email;

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->passwordlam
        ];

        if ($request->password != null) {
            if (Auth::attempt($infologin)) {
                if ($request->password == $request->konfirm_password) {
                    $user->password = Hash::make($request->password);
                } else {
                    return redirect()->back();
                }
            } else {
                // dd('hghgh');
                return redirect()->back()->withErrors(['error' => 'Password lama salah.']);
            }
            
        }

        $user->update();

        return redirect()->back()->with('success', 'Berhasil Edit Profile');
    }
    public function destroy()
    {
        $user = auth()->user();
        $user->delete();
        return redirect('/');
    }
}
