<?php

namespace App\Http\Controllers;

use App\Models\CollabModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Alert;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class CollabController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
        alert()->error('Gambar Harus Di Isi');
            $request->validate([
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif'
            ]);  
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis').".".$foto_ekstensi;
            $foto_file->move(public_path('uploads'), $foto_nama);

            $data = [
                'image' => $foto_nama
            ];

        CollabModel::create($data);
        FacadesAlert::success('Berhasil', 'Kamu Berhasil Tambah Data');
        return redirect()->back();
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
        $data = CollabModel::where('id',$id)->first();
        return view('landing_page.edit_sponsor')->with([
            'data'=>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        alert()->error('Gagal','Gambar Harus Di Isi');
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]); 
        $data = [
            'image' => $request->foto
        ];

        if($request->hasFile('foto')){

            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis').".".$foto_ekstensi;
            $foto_file->move(public_path('uploads'), $foto_nama);

            $data_foto = CollabModel::where('id',$id)->first();
            File::delete(public_path('uploads') . '/' . $data_foto->image);

            // $data = [
            //     'foto' => $foto_nama
            // ];

            $data['image'] = $foto_nama;
        }

        CollabModel::where('id', $id)->update($data);
        alert()->success('Berhasil', 'Kamu Berhasil Update Data');
        return redirect('/sponsor');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = CollabModel::where('id',$id)->first();
        File::delete(public_path('uploads') . '/' . $data->image);

        CollabModel::where('id',$id)->delete($id);
        alert()->success('Berhasil', 'Kamu Berhasil Hapus Data');
        return redirect()->back();
    }
}
