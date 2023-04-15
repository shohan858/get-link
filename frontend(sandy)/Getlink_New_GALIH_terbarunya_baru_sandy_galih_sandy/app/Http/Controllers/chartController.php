<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chartController extends Controller
{
    public function chart()
{
    $labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
    $data = [10, 20, 30, 40, 50, 60, 70];

    return view('admin.admin_pages.dashboard', compact('labels', 'data'));
}

}
