<?php

namespace App\Http\Controllers;

use App\Models\RoleModel;
use App\Models\User;
use Illuminate\Http\Request;

class usersControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return response()->json([
            'message' => 'success',
            'data' => $user,
        ], 200);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_role'=>'required',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:6|max:255',
        ]);
        $user = new User();
        $user->id_role = $request->id_role;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
        return response()->json([
            'message' => 'success',
            'data' => $user,
        ], 200);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_role'=>'required',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:6|max:255',
        ]);
        $user = User::find($id);
        if (!$user) {
            return response()->json([
                'message' => 'not found',
            ], 404);
        }

        $user->id_role = $request->id_role;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->update();

        $user->update();
        return response()->json([
            'message' => 'success',
            'data' => $user,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json([
                'message' => 'not found',
            ], 404);
        }
        $user->delete();
        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function account() {
        $data = User::all();
        $data2 = RoleModel::all();
        return view('account')->with('data', $data)->with('data2', $data2);
    }
}
