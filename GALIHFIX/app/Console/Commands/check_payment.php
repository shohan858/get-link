<?php

namespace App\Console\Commands;

use App\Models\microsite;
use App\Models\transaksi;
use App\Models\User;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Xendit\Xendit;


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
        $maxRetries = 5; // Maximum number of retries
        $retryCount = 0; // Counter for retries

        while ($retryCount < $maxRetries) {
            try {
                date_default_timezone_set("Asia/Jakarta");
                Xendit::setApiKey(env('SECRET_KEY_XENDIT'));
                // get pending order from DB
                $order      = transaksi::where('status','pending')->get();
                foreach($order as $key => $row){
                    $get_invoice = \Xendit\Invoice::retrieve($row->invoice_id);
                    if($get_invoice['status'] == "PAID" || $get_invoice['status'] == "SETTLED"){
                        // update status order
                        $update_order = transaksi::find($row->id);
                        $update_order->status = $get_invoice['status'];
                        $update_order->payment_gateway = $get_invoice['payment_channel'];
                        $update_order->save();

                        // create ticket 
                        //ganti dengan update slot
                    }elseif($get_invoice['status'] == "EXPIRED"){
                        // update order status
                        $update_order = transaksi::find($row->id);
                        $update_order->status = "EXPIRED";
                        $update_order->save();
                        // delete customer ticket
                    }
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
    }
}
