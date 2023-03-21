<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class update_profileController extends Controller
{
    public function index($id) {
        $data = User::where('id', $id)->get();
        return view('edit_profile')->with('data', $data);
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if (!empty($request->password)) {
            $user->password = password_hash($request->password, PASSWORD_DEFAULT, ['cost' => 10]);
        }

        $file = $request->hasFile('image');
        if($file)
        {
            $imgnm = Carbon::now()->timestamp.'.'.$request->image->extension();
            $request->image->storeAs('images.user_profile',$imgnm);
            $user->image = $imgnm;
        }

        $user->update();
        return redirect()->back();
    }
}
