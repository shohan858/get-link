<?php

namespace App\Http\Controllers;

use App\Models\BudgetModel;
use App\Models\MicrositeSlotModel;
use App\Models\TransaksiModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = TransaksiModel::all();
        $no = 1;
        return view('transaksi.index')->with([
            'transaksi' => $transaksi,
            'no' => $no,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $slot = MicrositeSlotModel::all();
        $beli = MicrositeSlotModel::find($id);
        $subtotal = $beli->price + $beli->subtotal;
        return view('microsite.premium.transaksi')->with([
            'data' => $slot,
            'harga' => $beli,
            'subtotal' => $subtotal,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        
        $transaksi = new TransaksiModel();

        $slot = MicrositeSlotModel::find($id);
        $transaksi->id_user = Auth::User()->id;
        $transaksi->type = $request->type;
        $transaksi->id_produk = $slot->id;
        $transaksi->sub_total += $slot->price;
        $transaksi->total += $transaksi->sub_total;
        $transaksi->invoice = $request->invoice;
        $transaksi->payment_gateway = $request->payment_gateway;
        $transaksi->deskripsi = $request->deskripsi;
        $transaksi->date = '2023-03-15';
        $check_paket = MicrositeSlotModel::where('id', $transaksi->id_produk)->first();
        $user = Auth::user();
        $budget = BudgetModel::find(1);
        if ($user) {
            if ($check_paket) {
                $user->batas_microsite += $check_paket->kuantiti;
                $budget->value += $check_paket->price;
                $budget->save();
                $user->save();
            }
        }

        $transaksi->save();

        $premium = User::where('id', auth()->id())->first();
        $premium->status = "langganan";
        $premium->update();


        // return response()->json([
        //     'message' => 'success',
        //     'data' => $transaksi
        // ], 200);s

        Alert::success('Selamat', 'Berhasil Transaksi');
        return redirect('/premium');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaksi = TransaksiModel::where('id', $id)->first();
        $user = User::where('id', $transaksi->id_user)->first();
        return view('transaksi.show')->with([
            'transaksi' => $transaksi,
            'user' => $user,
        ]);
    }

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
        $transaksi = TransaksiModel::find($id);
        if (!$transaksi) {
            return response()->json([
                'message' => 'Id tidak ada'
            ], 404);
        }



        $transaksi->id = $request->id;
        $transaksi->id_user = $request->id_user;
        $transaksi->type = $request->type;
        $transaksi->id_produk = $request->id_produk;
        $transaksi->total = $request->total;
        $transaksi->sub_total = $request->sub_total;
        $transaksi->invoice = $request->invoice;
        $transaksi->payment_gateway = $transaksi->payment_gateway;
        $transaksi->deskripsi = $transaksi->deskripsi;
        $transaksi->date = $transaksi->date;
        $transaksi->transaksi = $transaksi->transaksi;

        $transaksi->update();
        return response()->json([
            'message' => 'success',
            'data' => $transaksi
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi = TransaksiModel::find($id);
        if (!$transaksi) {
            return response()->json([
                'message' => 'Id tidak ada'
            ], 404);
        }

        $transaksi->delete();
        return response()->json([
            'message' => 'Success'
        ], 200);
    }
}
