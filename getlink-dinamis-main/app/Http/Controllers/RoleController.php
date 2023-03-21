<?php

namespace App\Http\Controllers;

use App\Models\RoleModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = RoleModel::all();
        return view('role.index')->with('data', $data);
        $role = RoleModel::all();
        return response()->json([
            "message" => "success",
            'data' => $role,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role.create_role');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:33'
        ]);
        $role = new RoleModel();
        $role->name = $request->role;
        $role->save();
        // return response()->json([
        //     'name'=>$role,
        // ],200);
        return redirect('role');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = RoleModel::where('id', $id)->get();
        return view('role.edit_role')->with('data', $role);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role = RoleModel::find($id);
        if(!$role){
            return response()->json([
                'message' => 'Role Not Found',
            ], 404);
        }
        
        $role->name = $request->role;
        $role->save();

        // return response()->json([
        //    'message' => 'Role Update',
        //    'Role' => $role, 
        // ], 200,);
        return redirect('role');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = RoleModel::find($id);
        if(!$role){
            return response()->json([
                'message' => 'Role Not Found'
            ], 404);
        }

        // $role->delete();
        // return response()->json([
        //     'message' => 'Berhasil'
        // ], 200);
        $role->delete();
        Alert::success('Berhasil','Berhasil Hapus Data');
        return redirect('role');
    }
}
