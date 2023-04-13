<?php

namespace App\Console\Commands;

use App\Models\microsite;
use App\Models\transaksi;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class check_payment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:check_payment';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
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
        
        foreach ($invoices as $invoice) {
            $find_transaksi = transaksi::where('external_id', $invoice['external_id'])->first();
            if ($find_transaksi && $invoice['status'] == "PAID") {
                $find_transaksi->status = "PAID";
                $find_transaksi->update();
            }
        }
    }
}
