<?php

namespace App\Http\Controllers;

use App\Models\komponen;
use App\Models\konten;
use App\Models\microsite;
use App\Models\template;
use Illuminate\Http\Request;

class MicrositeController extends Controller
{
    public function index($link) {
        $data = microsite::where('link', $link)->first();
        $id_komponen_array = explode(',', $data->id_komponen);
        $komponen = array();
        foreach($id_komponen_array as $key => $row){
            $komponens = komponen::find($row);
            if($komponens){
                $komponen[$key]['id'] = $komponens->id;
                $komponen[$key]['code'] = $komponens->code;
            }

        }

        $konten = konten::where('id_microsite', $data->id)->get();

        $template = template::findOrFail($data->id_template);
        if($konten)
        {
            $konten = $konten;
        }
        else {
            $konten = [];
        }

        return view('microsite.index', ['data' => $komponen, 'background' => $template, 'konten' => $konten]);
    }
}
