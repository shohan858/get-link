<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function kategori(){
        $data = KategoriModel::all();
        return view('kategori.kategorii')->with('data',$data);
    }

    public function table_kategori(){
        $data = KategoriModel::all();
        return view('kategori.tablekategori')->with('data',$data);
    }

    public function create_kategori(){
        return view('kategori.create_kategori');
    }

    public function show_update($id){
        $item =KategoriModel::findOrFail($id);
        return view('kategori.update_kategori')->with([
            'data'=>$item
        ]);
    }

    public function index()
    {
        $data = KategoriModel::all();
        return response()->json([
            'message' => 'success',
            'data' => $data
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'icon'=>'mimes:jpeg,jpg,png,gif'
        ],[
            'icon.mimes' => 'Foto Harus Berextensi JPEG,JPG,PNG,GIF'
        ]);
        $data = new KategoriModel();
        
        $data->icon = $request->icon;
        $data->title = $request->title;
        $data->color=$request->color;
        $file = $request->file('icon');
        $data->icon = time() . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('uploads', $data->icon, 'public');
        $file->move(public_path('uploads'), $data->icon);
        $data->save();
        // return response()->json([
        //     'message' => 'success',
        //     'file_path' => Storage ::url($filePath),
        //     'data' => $data
        // ], 200);
        return redirect('/table/kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = KategoriModel::find($id);
        if (!$data) {
            return response()->json([
                'message' => 'not found'
            ], 200);
        }

        $request->validate([
            'icon'=>'mimes:jpeg,jpg,png,gif'
        ],[
            'icon.mimes' => 'Foto Harus Berextensi JPEG,JPG,PNG,GIF'
        ]);

        $data->color=$request->color;
        $data->title = $request->title;
        $file = $request->file('icon');
        if($file != null){
            $data->icon = time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('uploads', $data->icon, 'public');
            $file->move(public_path('uploads'), $data->icon);
        }
        $data->update();
        return redirect('table_kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
        // $data = KategoriModel::findOrFail($id);
        // if (!$data) {
        //     return response()->json([
        //         'message' => 'not found'
        //     ], 200);
        // }

        // $data->delete();
        // return response()->json([
        //     'message' => 'success',
        // ], 200);
        $item =KategoriModel::findOrFail($id);
        $item->delete();
        return redirect('/table_kategori')->with('message', "data telah dihapus");
    }
}
