<?php

namespace App\Http\Controllers;

use App\Models\MicrositeSlotModel;
use App\Models\TransaksiDetailModel;
use App\Models\TransaksiModel;
use Illuminate\Http\Request;

class TransaksiDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaki_detail = TransaksiDetailModel::all();
        return response()->json([
            'message' => 'success',
            'data' => $transaki_detail
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
        $transaki_detail = new TransaksiDetailModel();
        $transaksi = TransaksiModel::find($request->id_transaksi);
        $slot = MicrositeSlotModel::find($request->id_produk);
        $transaki_detail->id = $request->id;
        $transaki_detail->id_transaksi = $request->id_transaksi;
        $transaki_detail->id_produk = $request->id_produk;
        $transaki_detail->kuantiti = $request->kuantiti;
        $transaki_detail->subtotal = $slot->price;
        $transaki_detail->save();

        return response()->json([
            'message' => 'success',
            'data' => $transaki_detail
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
        $transaki_detail = TransaksiDetailModel::find($id);
        if (!$transaki_detail) {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }

        $transaksi = TransaksiModel::find($request->id_transaksi);

        $transaki_detail->id = $request->id;
        $transaki_detail->id_transaksi = $request->id_transaksi;
        $transaki_detail->id_produk = $request->id_produk;
        $transaki_detail->kuantiti = $request->kuantiti;
        $transaki_detail->subtotal = $transaksi->subtotal;
        $transaki_detail->update();

        return response()->json([
            'message' => 'success',
            'data' => $transaki_detail
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaki_detail = TransaksiDetailModel::find($id);
        if (!$transaki_detail) {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }

        $transaki_detail->delete();

        return response()->json([
            'message' => 'success'
        ], 200);
    }
}
