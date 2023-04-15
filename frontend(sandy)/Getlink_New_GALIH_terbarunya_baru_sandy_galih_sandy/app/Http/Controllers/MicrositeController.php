<?php

namespace App\Http\Controllers;

use App\Models\komponen;
use App\Models\konten;
use App\Models\microsite;
use App\Models\microsite_detail;
use App\Models\template;
use Illuminate\Http\Request;

use function Termwind\style;

class MicrositeController extends Controller
{
    public function index($link)
    {
        $data = microsite::where('link', $link)->first();

        $microdet = microsite_detail::where('id_microsite', $data->id)->where('status', 'on')->orderBy('order', 'ASC')->get();
        $komponen = array();
        foreach ($microdet as $key => $row) {
            $komponen[$key]['id'] = $row->id_komponen;
            $komponen[$key]['code'] = $row->code;
            $komponen[$key]['icon'] = $row->icon;
        }

        $template = microsite::findOrFail($data->id);

        return view('microsite.index', ['data' => $komponen, 'background' => $template]);
    }
}
