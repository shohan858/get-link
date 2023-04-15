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
    
    public function handle2() {
        $maxRetries = 5; // Maximum number of retries
        $retryCount = 0; // Counter for retries

        while ($retryCount < $maxRetries) {
            try {
                date_default_timezone_set("Asia/Jakarta");
                Xendit::setApiKey(env('API_KEY'));
                // get pending order from DB
                $order      = order::where('status','pending')->get();
                foreach($order as $key => $row){
                    $get_invoice = \Xendit\Invoice::retrieve($row->invoice_id);
                    if($get_invoice['status'] == "PAID" || $get_invoice['status'] == "SETTLED"){
                        // update status order
                        $update_order = order::find($row->id);
                        $update_order->status = $get_invoice['status'];
                        $update_order->save();

                        // create ticket 
                        //ganti dengan update slot
                        $tickets = ticket_customer::where('id_order',$row->id)->get();
                        foreach($tickets as $rows){
                            $ticket_customer         = ticket_customer::find($rows->id);
                            $ticket_customer->status = "created";
                            $ticket_customer->save();
                            $event_ticket = ticket::find($ticket_customer->id_ticket);
                            $event_ticket->qty = $event_ticket->qty - 1;
                            $event_ticket->save();
                        }

                        // Mail to customer
                        $order_data = order::find($row->id);
                        mail::to($row->payer_email)->send(new order_mail($order_data));

                        // save transaction report
                            if(array_key_exists("bank_code",$get_invoice)){
                            $payment_type = $get_invoice['payment_method']." - ".$get_invoice['bank_code'];
                        }else{
                            $payment_type = $get_invoice['payment_method']." - ".$get_invoice['payment_channel'];
                        }

                        $check_transaction = transaction::where('id_order',$row->id)->first();
                        if($check_transaction){
                            $transaction = transaction::where('id_order',$row->id)->first();
                        }else{
                            $transaction = new transaction();
                        }

                        $transaction->id_user = $row->id_uer;
                        $transaction->total = $row->total;
                        $transaction->id_event = $row->id_event;
                        $transaction->id_ticket = $row->id_ticket;
                        $transaction->id_eo = $row->id_eo;
                        $transaction->payment_type = $payment_type;
                        $transaction->status = $get_invoice['status'];
                        $transaction->remark = "-";
                        $transaction->id_order = $row->id;
                        $transaction->code = $get_invoice['id'];
                        $transaction->paid_at = $get_invoice['paid_at'];
                        $transaction->payer_email = $get_invoice['payer_email'];
                        $transaction->paid_ammount = $get_invoice['initial_amount'];
                        $transaction->currency      = $get_invoice['currency'];
                        $transaction->save();

                        // insert to income
                        $income             = new income();
                        $income->total      = $row->total;
                        $income->by         = "System";
                        $income->remark     = $row->desc;
                        $income->save();
                    }elseif($get_invoice['status'] == "EXPIRED"){
                        // update order status
                        $update_order = order::find($row->id);
                        $update_order->status = "EXPIRED";
                        $update_order->save();
                        // delete customer ticket
                        $tickets = ticket_customer::where('id_order',$row->id)->get();
                        foreach($tickets as $rows){
                            $delete_ticket = ticket_customer::find($rows->id);
                            $delete_ticket->delete();
                        }
                    }
                    // delete from queue
                    $queue_transaction = queue_transaction::where('id_user',$row->id_user)->where('id_ticket',$row->id_ticket)->first();
                    $queue_transaction->delete();
                }

                break; // If the code is executed successfully without any exception, break out of the loop
            } catch (Exception $exception) {
                // Code to handle the caught exception, e.g. log the error, display an error message, etc.
                echo "Caught exception: " . $exception->getMessage() . PHP_EOL;
                // Increment the retry count
                $retryCount++;
                // Sleep for a short duration before retrying
                usleep(500000); // Sleep for 500 milliseconds (0.5 seconds)
            }
        }


        if ($retryCount >= $maxRetries) {
            // Code to handle the case when maximum retries are reached
            echo "Maximum retries reached, unable to establish connection." . PHP_EOL;
        }else{
            echo "Success";
        }
    }
}
