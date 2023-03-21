<?php

namespace App\Http\Controllers;

use App\Models\ComentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ComentModel::all();
        return view('comment')->with('data', $data);
        $coment = ComentModel::all();
        return response()->json([
            'message' => 'success',
            'data' => $coment
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'komentar' => 'required|string|min:|max:33',
            
        ]);

        $coment = new ComentModel();

        $coment->id_user = $request->id_user;
        $coment->komentar = $request->komentar;

        $coment->save();

        return response()->json([
            'message' => 'success',
            'data' => $coment,
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update_show(string $id)
    {
        $coment = ComentModel::find($id);
        if (!$coment) {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }

        $coment->status = "show";

        $coment->update();

        return response()->json([
            'message' => 'success',
            'data' => $coment,
        ], 200);
    }

    public function update_hide(string $id)
    {
        $coment = ComentModel::find($id);
        if (!$coment) {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }

        $coment->status = "hide";

        $coment->update();

        return response()->json([
            'message' => 'success',
            'data' => $coment,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coment = ComentModel::find($id);
        if (!$coment) {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }

        $coment->delete();

        return response()->json([
            'message' => 'success',
            'data' => $coment,
        ], 200);
    }
}
