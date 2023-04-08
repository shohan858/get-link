<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Xendit\Xendit;

class PaymentController extends Controller
{
    public function tampil() {
        return view('payment');
    }

    public function createInvoice(Request $request)
    {
        // Menghubungkan ke API Xendit dengan API key
        Xendit::setApiKey(config('services.xendit.secret_key'));
    
        // Membuat tagihan dengan memanggil fungsi createInvoice dari SDK Xendit
        $invoice = \Xendit\Invoice::create([
            'external_id' => 'invoice_' . time(),
            'amount' => $request->input('amount'),
            'payer_email' => $request->input('email'),
            'description' => 'Pembayaran tagihan dari ' . $request->input('name'),
            'callback_virtual_account_id' => $request->input('virtual_account_id'),
            'invoice_duration' => $request->input('invoice_duration'),
            'success_redirect_url' => $request->input('success_redirect_url'),
            'failure_redirect_url' => $request->input('failure_redirect_url')
        ]);

        dd($invoice);
    
        // Menambahkan URL pembayaran ke dalam baris tagihan yang baru saja dibuat
        $savedInvoice = Invoice::create([
            'external_id' => $invoice['id'],
            'amount' => $invoice['amount'],
            'payer_email' => $invoice['payer_email'],
            'description' => $invoice['description'],
            'payment_url' => $invoice['invoice_url']
        ]);
    

        // Menampilkan halaman invoice beserta tautan pembayaran
        return view('invoice', ['invoice' => $savedInvoice]);
    }
    
    
}
