<?php

namespace App\Http\Controllers;

use App\Models\CollabModel;
use App\Models\getlink;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $data = getlink::all();
        $data3 = CollabModel::all();
        $no = 1;
        return view('Home.landing_page')->with('data_getlink', $data)->with('no', $no)->with('data3', $data3);
    }
}
