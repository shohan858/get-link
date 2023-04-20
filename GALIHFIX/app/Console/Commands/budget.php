<?php

namespace App\Console\Commands;

use App\Models\budgetModel;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class budget extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:budget';

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
        $budget = budgetModel::first();
        $secret_key = 'Basic '.config('xendit.key_auth');
        $response = Http::withHeaders([
            'Authorization' => $secret_key
        ])->get('https://api.xendit.co/balance');

        $balance = $response['balance'];

        $budget->budget = $balance;
        $budget->update();
    }
}
