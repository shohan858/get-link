<?php

namespace App\Http\Controllers;

use App\Models\getlink_image;
use Illuminate\Http\Request;

class getlink_imageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getlink_image = getlink_image::all();
        return response()->json([
            "message" => "berhasil",
            "data" => $getlink_image,
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image5' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $getlink_image = new getlink_image();
        $getlink_image->image1 = $request->image1;
        $getlink_image->image2 = $request->image2;
        $getlink_image->image3 = $request->image3;
        $getlink_image->image4 = $request->image4;
        $getlink_image->image5 = $request->image5;
        
        $file1 = $request->file('image1');
        $file2 = $request->file('image2');
        $file3 = $request->file('image3');
        $file4 = $request->file('image4');
        $file5 = $request->file('image5');

        if($file1){
            $getlink_image->image1 = time() . '.' . $file1->getClientOriginalExtension();
            $filePath = $file1->storeAs('uploads', $getlink_image->image1, 'public');
    
            $file1->move(public_path('uploads'), $getlink_image->image1); 
        }

        if($file2){
            $getlink_image->image2 = time() . '.' . $file2->getClientOriginalExtension();
            $filePath = $file2->storeAs('uploads', $getlink_image->image2, 'public');
    
            $file2->move(public_path('uploads'), $getlink_image->image2); 
        }

        if($file3){
            $getlink_image->image3 = time() . '.' . $file3->getClientOriginalExtension();
            $filePath = $file3->storeAs('uploads', $getlink_image->image3, 'public');
    
            $file3->move(public_path('uploads'), $getlink_image->image3); 
        }

        if($file4){
            $getlink_image->image4 = time() . '.' . $file4->getClientOriginalExtension();
            $filePath = $file4->storeAs('uploads', $getlink_image->image4, 'public');
    
            $file4->move(public_path('uploads'), $getlink_image->image4); 
        }

        if($file5){
            $getlink_image->image5 = time() . '.' . $file5->getClientOriginalExtension();
            $filePath = $file5->storeAs('uploads', $getlink_image->image5, 'public');
    
            $file5->move(public_path('uploads'), $getlink_image->image5); 
        }

        $getlink_image->save();
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
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image5' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $getlink_image = getlink_image::find($id);
        if (!$getlink_image) {
            return response()->json([
                'message' => 'not found',
            ], 404);
        }
        $getlink_image->image1 = $request->image1;
        $getlink_image->image2 = $request->image2;
        $getlink_image->image3 = $request->image3;
        $getlink_image->image4 = $request->image4;
        $getlink_image->image5 = $request->image5;
        
        $file1 = $request->file('image1');
        $file2 = $request->file('image2');
        $file3 = $request->file('image3');
        $file4 = $request->file('image4');
        $file5 = $request->file('image5');

        if($file1){
            $getlink_image->image1 = time() . '.' . $file1->getClientOriginalExtension();
            $filePath = $file1->storeAs('uploads', $getlink_image->image1, 'public');
    
            $file1->move(public_path('uploads'), $getlink_image->image1); 
        }

        if($file2){
            $getlink_image->image2 = time() . '.' . $file2->getClientOriginalExtension();
            $filePath = $file2->storeAs('uploads', $getlink_image->image2, 'public');
    
            $file2->move(public_path('uploads'), $getlink_image->image2); 
        }

        if($file3){
            $getlink_image->image3 = time() . '.' . $file3->getClientOriginalExtension();
            $filePath = $file3->storeAs('uploads', $getlink_image->image3, 'public');
    
            $file3->move(public_path('uploads'), $getlink_image->image3); 
        }

        if($file4){
            $getlink_image->image4 = time() . '.' . $file4->getClientOriginalExtension();
            $filePath = $file4->storeAs('uploads', $getlink_image->image4, 'public');
    
            $file4->move(public_path('uploads'), $getlink_image->image4); 
        }

        if($file5){
            $getlink_image->image5 = time() . '.' . $file5->getClientOriginalExtension();
            $filePath = $file5->storeAs('uploads', $getlink_image->image5, 'public');
    
            $file5->move(public_path('uploads'), $getlink_image->image5); 
        }

        $getlink_image->update();
        return response()->json([
            'message' => 'berhasil',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $getlink_image = getlink_image::find($id);
        if (!$getlink_image) {
            return response()->json([
                'message' => 'not found',
            ], 404);
        }
        $getlink_image->delete();
        return response()->json([
            'message' => 'berhasil',
        ]);
    }
}
