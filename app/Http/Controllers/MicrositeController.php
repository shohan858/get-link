<?php

namespace App\Http\Controllers;

use App\Models\komponen;
use App\Models\konten;
use App\Models\microsite;
use App\Models\microsite_detail;
use App\Models\microsite_detail_konten;
use App\Models\template;
use App\Models\visitorModel;
use Illuminate\Http\Request;

use function Termwind\style;

class MicrositeController extends Controller
{
    public function index($link)
    {
        $data = microsite::where('link', $link)->first();
        $microdet = microsite_detail::where('id_microsite', $data->id)->where('status', 'on')->orderBy('order', 'ASC')->get();
        $microkon_kode = '';
        $komponen = array();

        foreach ($microdet as $key => $row) {
            if($row->id_komponen === 9) {
                $microkon_kode = '';
                $microkon = microsite_detail_konten::where('id_microsite', $data->id)->get();
                foreach($microkon as $row) {
                    $microkon_kode .= $row->code;
                }
                $microkon_code = '<div class="bungkus-anak" id="bungkus-template-konten">' . $microkon_kode . '</div>';
                $komponen[$key]['id'] = 9;
                $komponen[$key]['code'] = $microkon_code;
            }
            else {
                $komponen[$key]['id'] = $row->id_komponen;
                $komponen[$key]['code'] = $row->code;
            }
        }
        
        $template = microsite::findOrFail($data->id);

        $jenis_browser = request()->server('HTTP_USER_AGENT');

        $visitor = visitorModel::where('id_microsite', $link)
        ->where('ip_address', request()->ip())
        ->where('date', now()->toDateString())
        ->where('browser', $jenis_browser)
        ->count();

        if($visitor == 0){
            $test = new visitorModel();
            $test->id_microsite = $link;
            $test->ip_address = request()->ip();
            $test->date = now()->toDateString();
            $test->browser = $jenis_browser;
            $test->save();
            return view('microsite.index', ['data' => $komponen, 'background' => $template]);
        }else{
            return view('microsite.index', ['data' => $komponen, 'background' => $template]);
        }

    }
}
