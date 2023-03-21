<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = ArtikelModel::all();
        return response()->json([
            'message' => 'success',
            'data' => $artikel
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required|string|max:33',
            'subjudul' => 'required|string|max:33',
            'isi' => 'required|string|max:255' 
        ]);

        $artikel = new ArtikelModel();

        $artikel->judul = $request->judul;
        $artikel->subjudul = $request->subjudul;
        $artikel->isi = $request->isi;
        $file = $request->file('image');
        $artikel->image = time() . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('uploads', $artikel->image, 'public');

        $file->move(public_path('uploads'), $artikel->image);

        $artikel->save();

        return response()->json([
            'message' => 'success',
            'file_path' => Storage::url($filePath),
            'data' => $artikel,
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
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required|string|max:33',
            'subjudul' => 'required|string|max:33',
            'isi' => 'required|string|max:255'
        ]);
        $artikel = ArtikelModel::find($id);
        if (!$artikel) {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }

        $artikel->judul = $request->judul;
        $artikel->subjudul = $request->subjudul;
        $artikel->isi = $request->isi;
        $file = $request->file('image');
        $artikel->image = time() . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('uploads', $artikel->image, 'public');

        $file->move(public_path('uploads'), $artikel->image);

        $artikel->update();

        return response()->json([
            'message' => 'success',
            'file_path' => Storage::url($filePath),
            'data' => $artikel,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artikel = ArtikelModel::find($id);
        if (!$artikel) {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }

        $artikel->delete();
        return response()->json([
            'message' => 'success'
        ], 200);
    }
}
