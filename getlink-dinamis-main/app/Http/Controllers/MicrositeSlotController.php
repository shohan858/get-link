<?php

namespace App\Http\Controllers;

use App\Models\MicrositeSlotModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class MicrositeSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = MicrositeSlotModel::all();
        $no = 1;
        // return response()->json([
        //     'message' => 'success',
        //     'data' => $data
        // ], 200);
        return view('microsite.microsite_slot.index')->with([
            'data'=>$data,
            'no'=>$no
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
        
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'name' => 'required|string|max:33',
            'kuantiti' => 'required|numeric|max:255'
        ]);
        $data = new MicrositeSlotModel();
        $data->id = $request->id;
        $data->name = $request->name;
        $data->price = $request->price;
        $data->kuantiti = $request->kuantiti;
        $data->save();
        // return response()->json([
        //     'message' => 'success',
        //     'data' => $data
        // ], 200);
        Alert::success('Berhasil','Berhasil Menambahkan Slot');
        return redirect('/micrositeslot');
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
    public function edit(string $id)
    {
        $data = MicrositeSlotModel::where('id',$id)->first();
        return view('microsite.microsite_slot.edit')->with([
            'data'=>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'name' => 'required|string|max:33',
            'kuantiti' => 'required|numeric|max:255'
        ]);
        $data = MicrositeSlotModel::find($id);
        if (!$data) {
            return response()->json([
                'message' => 'not found'
            ], 200);
        }
        
        $data->name = $request->name;
        $data->price = $request->price;
        $data->kuantiti = $request->kuantiti;
        $data->update();
        // return response()->json([
        //     'message' => 'success',
        //     'data' => $data
        // ], 200);
        Alert::success('Berhasil','Berhasil Update Slot');
        return redirect('/micrositeslot');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = MicrositeSlotModel::find($id);
        if (!$data) {
            return response()->json([
                'message' => 'not found'
            ], 200);
        }

        $data->delete();
        // return response()->json([
        //     'message' => 'success',
        // ], 200);
        Alert::success('Berhasil','Berhasil Hapus Slot');
        return redirect('/micrositeslot');
    }
}
