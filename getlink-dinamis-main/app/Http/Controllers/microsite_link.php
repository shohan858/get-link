<?php

namespace App\Http\Controllers;

use App\Models\BudgetModel;
use App\Models\microsite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class microsite_link extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($link)
    {
        $link = microsite::where('link', $link)->first();
        $id_user = user::where('id', $link->id_user)->get();
        $template = 1; //buat id jenis template
        if($link != null && $id_user){
            if($template == 1){
                return view('tampil_template');
            }
        }else{
            dd('not found!');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
