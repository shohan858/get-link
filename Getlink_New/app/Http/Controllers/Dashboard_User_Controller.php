<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\microsite;
use App\Models\template;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard_User_Controller extends Controller
{
    public $id_kategori;
    public function dashboard()
    {
        return view('Dashboard_User.dashboard');
    }

    public function page2()
    {
        $kategori = kategori::all();
        return view('Dashboard_User.pages2')->with([
            'kategori' => $kategori
        ]);
    }
    
    public function create_microsite()
    {
        return view('Dashboard_User.pages4');
    }

    public function kirim_id_kategori(Request $request)
    {
        $this->id_kategori = $request->id;

        return response()->json([
            'mesage' => 'success'
        ], 200);
    }

    public function page3(Request $request)
    {
        $lastSegment = collect(request()->segments())->last();
        $template = template::where('id_kategori', $lastSegment)->get();
        return view('Dashboard_User.pages3')->with([
            'template' => $template
        ]);
    }

    public function page4()
    {
        return view('Dashboard_User.pages4');
    }

    public function page5()
    {
        return view('Dashboard_User.pages5');
    }

    public function regular()
    {
        return view('Dashboard_User.regular');
    }

    public function langganan()
    {
        return view('Dashboard_User.langganan');
    }

    public function nambah_microsite(Request $request)
    {
        $microsite = new microsite();
        $user = User::where('id', Auth::user()->id)->first();
        // $batas = $user->batas_microsite;
        // if ($user->jumlah_microsite == $batas) {
        //     if ($user->status == 'reguler') {
        //         return response()->json([
        //             'message' => 'Kamu belum berlangganan'
        //         ], 200);
        //     } else if (($user->status == 'langganan') && ($user->jumlah_microsite < $batas)) {
        //         $microsite->id_user = $user->id;
        //         $microsite->title = $request->title;
        //         $microsite->link = $request->link;
        //         $microsite->id_template = $request->id_template;
        //         $microsite->id_kategori = $request->id_kategori;
        //         $microsite->save();
        //         $user->jumlah_microsite += 1;
        //         $user->save();
        //         return response()->json([
        //             'message' => 'success',
        //             'data' => $microsite,
        //         ], 200);
        //     } else {
        //         return response()->json([
        //             'message' => 'Kamu belum berlangganan'
        //         ], 200);
        //     }
        // }

        $microsite->id_user = $user->id;
        $microsite->name = $request->name;
        $microsite->link = $request->link;
        $microsite->id_template = $request->id_template;
        $microsite->id_kategori = $request->id_kategori;
        $microsite->save();
        // $user->jumlah_microsite += 1;
        // $user->save();
        return response()->json([
            'message' => 'success',
            'data' => $microsite,
        ], 200);
    }

    public function edit_microsite()
    {
        $lastSegment = collect(request()->segments())->last();
        // dd($lastSegment);
        $data = template::findOrFail($lastSegment);   
        // dd($data);
        return view('Dashboard_user.pages5')->with('data', $data);
    }
}
