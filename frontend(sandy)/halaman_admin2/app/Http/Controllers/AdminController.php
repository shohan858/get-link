<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.admin_pages.dashboard');
    }
    public function halaman_utama(){
        return view('admin.admin_pages.halaman_utama');
    }
    public function microsite(){
        return view('admin.admin_pages.microsite');
    }
    public function paket(){
        return view('admin.admin_pages.paket');
    }
    public function template(){
        return view('admin.admin_pages.template');
    }
    public function account(){
        return view('admin.admin_pages.account.acc');
    }
    public function comment(){
        return view('admin.admin_pages.account.comment');
    }
    public function cms(){
        return view('admin.admin_pages.edit_landingPage.cms');
    }
    public function get_link(){
        return view('admin.admin_pages.edit_landingPage.get_link');
    }
    public function keunggulan(){
        return view('admin.admin_pages.edit_landingPage.keunggulan_website');
    }
    public function microsite1(){
        return view('admin.admin_pages.edit_landingPage.microsite1');
    }
    public function microsite2(){
        return view('admin.admin_pages.edit_landingPage.microsite2');
    }
    public function sponsor(){
        return view('admin.admin_pages.edit_landingPage.sponsor');
    }
    public function short_link(){
        return view('admin.admin_pages.edit_landingPage.short_link');
    }
    public function kategori(){
        return view('admin.admin_pages.kategori');
    }
}
