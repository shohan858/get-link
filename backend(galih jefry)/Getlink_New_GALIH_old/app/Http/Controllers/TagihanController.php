<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class TagihanController extends Controller
{
    public function index()
    {
        $secret_key = 'Basic ' . config('xendit.key_auth');

        $response = Http::withHeaders([
            'Authorization' => $secret_key,
        ])->get('https://api.xendit.co/v2/invoices');

        $invoices = collect($response->json())->map(function($invoice) {
            return [
                'status' => $invoice['status'],
                'external_id' => $invoice['external_id']
            ];
        })->all();      
        
        $data = Tagihan::all();

        foreach ($invoices as $invoice) {
            $external_id = $invoice['external_id'];
            $status = $invoice['status'];
            $tagihan = Tagihan::where('doc_no', $external_id)->first();
            if ($tagihan) {
                if ($status == "SETTLED") {
                    $tagihan->payment_status = "SETTLED";
                    $tagihan->update();
                }elseif($status == "PAID") {
                    $tagihan->payment_status = "PAID";
                    $tagihan->update();
                }elseif($status == "EXPIRED"){
                    dd('testing');
                    $tagihan->payment_status = "EXPIRED";
                    $tagihan->update();
                }
            }
        }
        
        
        return view('tagihan_list', compact('data'));
    }

    /**
     * halaman form create baru tagihan
     */
    public function create()
    {
        return view('tagihan_create');
    }

    /**
     * proses penyimpanan data tagihan
     */
    public function store()
    {
        $secret_key = 'Basic '.config('xendit.key_auth');
        $external_id = Str::random(10);
        $data_request = Http::withHeaders([
            'Authorization' => $secret_key
        ])->post('https://api.xendit.co/v2/invoices', [
            'external_id' => $external_id,
            'amount' => request('amount')
        ]);
        $response = $data_request->object();
        
        // Tagihan::create([
        //     'doc_no' => $external_id,
        //     'amount' => request('amount'),
        //     'description' => request('description'),
        //     'payment_status' => $response->status,
        //     'payment_link' => $response->invoice_url
        // ]);



        $tagihan = new Tagihan();

        $tagihan->doc_no = $response->external_id;
        $tagihan->amount = request('amount');
        $tagihan->description = request('description');
        $tagihan->payment_status = $response->status;
        $tagihan->payment_link = $response->invoice_url;

        $tagihan->save();
        return redirect()->route('tagihan.list');
    }

    public function update(Request $request, $id)
    {
        $tagihan = Tagihan::findOrFail($id);
        $secret_key = 'Basic '.config('xendit.key_auth');
        $data_request = Http::withHeaders([
            'Authorization' => $secret_key
        ])->get('https://api.xendit.co/v2/invoices/'.$tagihan->doc_no);
        $response = $data_request->object();

        if ($response->status === 'PAID') {
            $tagihan->payment_status = 'PAID';
            $tagihan->save();
            dd('tagihan berhasil diupdate!');
        } else {
            dd('tagihan dalam stsatus pending!');
        }
    }

    public function getAllInvoices()
    {
        $secret_key = 'Basic ' . config('xendit.key_auth');

        $response = Http::withHeaders([
            'Authorization' => $secret_key,
        ])->get('https://api.xendit.co/v2/invoices');

        $statusList = collect($response->json())->pluck('status');
        dd($statusList);
    }
}
