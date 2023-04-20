<?php

namespace App\Http\Controllers;

use App\Models\getlink;
use Illuminate\Http\Request;

class getlinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = getlink::all();
        return response()->json([
            'message' => 'berhasil',
            'data' => $data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:33',
            'subtitle' => 'required|string|max:255'
        ]);
        $getlink = new getlink();
        $getlink->title = $request->title;
        $getlink->subtitle = $request->subtitle;
        $file = $request->file('image');
        if($file){
            $getlink->image = time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('uploads', $getlink->image, 'public');
    
            $file->move(public_path('uploads'), $getlink->image); 
        }

        $getlink->save();
        return response()->json([
            'message' => 'berhasil',
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:33',
            'subtitle' => 'required|string|max:255'
        ]);
        $getlink = getlink::find($id);
        if (!$getlink) {
            return response()->json([
                'message' => 'not found',
            ], 404);
        }

        $getlink->title = $request->title;
        $getlink->subtitle = $request->subtitle;
        $file = $request->file('image');
        if($file){
            $getlink->image = time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('uploads', $getlink->image, 'public');
    
            $file->move(public_path('uploads'), $getlink->image); 
        }

        $getlink->update();
        return response()->json([
            'message' => 'berhasil',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $getlink = getlink::find($id);
        if (!$getlink) {
            return response()->json([
                'message' => 'not found',
            ], 404);
        }
        $getlink->delete();
        return response()->json([
            'message' => 'berhasil',
        ]);
    }
}
