<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use App\Models\microsite;
use App\Models\microsite_template_model;
use Illuminate\Http\Request;

class user_micrositeController extends Controller
{
    public function user_dashboard() {
        return view("user_pages.dashboard");
    }

    public function user_reguler() {
        return view("user_pages.index");
    }

    public function user_langganan() {
        return view("user_pages.langganan");
    }

    public function microsite_edit() {
        return view("user_pages.pages5");
    }

    public function create()
    {
        $data = KategoriModel::all();
        return view('user_pages.pages2')->with('data', $data);
    }

    public function template_microsite()
    {
        $data = microsite_template_model::all();
        return view('user_pages.pages3')->with('data', $data);
    }

    public function create_microsite() {
        return view('user_pages.pages4');
    }

    public function viewTemplate($link){
        $data = microsite::where('link', $link)->get();
        return view('tampil_template')->with('data', $data);
    }
}
