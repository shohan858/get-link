<?php

namespace App\Console\Commands;

use App\Models\visitorModel;
use App\Models\visitortotalModel;
use Illuminate\Console\Command;

class visitor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:visitor';

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
        $month = intval(date('m'));
        $visitor = visitortotalModel::where('id_microsite', 'testing')->select('total_visitor')->get();
        $count_visitor = visitorModel::all()->count();
        $total = explode(',', $visitor[0]->total_visitor);
        $total[$month - 1] = strval($count_visitor);
        visitortotalModel::where('id_microsite', 'testing')->update(['total_visitor' => implode(',', $total)]);
    }
}
