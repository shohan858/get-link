<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
  

    public function edit_profile($id){
        $user = User::find($id);
        return view('admin.edit_profile', compact('user'));
    }

    public function update(Request $request, $id){
        $request ->validate([
            'username'=>'required',
            'email'=>'required'
        ], [
            'username.required' => 'nama tidak boleh kosong!',
            'email.required' => 'email tidak boleh kosong!'
        ]);


        $user = User::find($id);
        $user->name = $request->username;
        $file = $request->hasFile('image');
        if ($file) {
            $name_image = Carbon::now()->timestamp . '.' . $request->image->extension();
            $request->image->storeAs($name_image);
            $user->img = $name_image;
        }
        $user->email = $request->email;
        
        if($request->password != null){
            if($request->password == $request->confirm_password){
                $user->password = Hash::make($request->password);
            }else{
                return redirect()->back();
            }
        }

        $user->update();

        return redirect('/admin_get')->with('success', 'Profile updated successfully.');

    }
    public function destroy(){
        $user = auth()->user();
        $user->delete();
        return redirect('/');
    }
    
}
