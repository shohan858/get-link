<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\komponen;
use App\Models\konten;
use App\Models\microsite;
use App\Models\microsite_detail;
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
        $my_microsite = microsite::where('id_user', Auth::user()->id)->get();
        return view('Dashboard_User.regular')->with([
            'my_microsite' => $my_microsite
        ]);
    }

    public function langganan()
    {
        return view('Dashboard_User.langganan');
    }

    public function nambah_microsite(Request $request)
    {
        // $microsite = new microsite();
        // $user = User::where('id', Auth::user()->id)->first();
        // // $batas = $user->batas_microsite;
        // // if ($user->jumlah_microsite == $batas) {
        // //     if ($user->status == 'reguler') {
        // //         return response()->json([
        // //             'message' => 'Kamu belum berlangganan'
        // //         ], 200);
        // //     } else if (($user->status == 'langganan') && ($user->jumlah_microsite < $batas)) {
        // //         $microsite->id_user = $user->id;
        // //         $microsite->title = $request->title;
        // //         $microsite->link = $request->link;
        // //         $microsite->id_template = $request->id_template;
        // //         $microsite->id_kategori = $request->id_kategori;
        // //         $microsite->save();
        // //         $user->jumlah_microsite += 1;
        // //         $user->save();
        // //         return response()->json([
        // //             'message' => 'success',
        // //             'data' => $microsite,
        // //         ], 200);
        // //     } else {
        // //         return response()->json([
        // //             'message' => 'Kamu belum berlangganan'
        // //         ], 200);
        // //     }
        // // }

        // $microsite->id_user = $user->id;
        // $microsite->name = $request->name;
        // $microsite->link = $request->link;
        // $microsite->id_template = $request->id_template;
        // $microsite->id_kategori = $request->id_kategori;
        // $microsite->save();
        // // $user->jumlah_microsite += 1;
        // // $user->save();
        // return response()->json([
        //     'message' => 'success',
        //     'data' => $microsite,
        // ], 200);
        $microsite = new microsite();
        $user = User::where('id', Auth::user()->id)->first();

        $template = template::findOrFail($request->id_template);

        $microsite->id_user = $user->id;
        $microsite->name = $request->name;
        $microsite->link = $request->link;
        $microsite->id_template = $request->id_template;
        $microsite->id_kategori = $request->id_kategori;
        $microsite->id_komponen = $template->id_komponen;
        $microsite->save();

        $okk = explode(',', $template->id_komponen);

        foreach ($okk as $ok => $o) {
            $komponen = komponen::findOrFail(intval($o));

            $micro_detail = new microsite_detail();
            $micro_detail->id_komponen = $o;
            $micro_detail->id_template = $request->id_template;
            $micro_detail->id_microsite = $microsite->id;
            $micro_detail->order = ($ok + 1);
            $micro_detail->status = 'on';
            $micro_detail->title = $komponen->name;
            $micro_detail->icon = $komponen->icon;
            $micro_detail->save();

            if ($o === '9') {
                $konten = new konten();
                $konten->id_microsite = $microsite->id;
                $konten->id_microsite_detail = $micro_detail->id;
                $konten->value = "";
                $konten->image = "boren.png";
                $konten->save();
            }
        }


        $user->jumlah_microsite += 1;
        $user->update();
        return response()->json([
            'message' => 'success',
            'data' => $microsite,
        ], 200);
    }

    public function edit_microsite()
    // {
    //     $lastSegment = collect(request()->segments())->last();
    //     // dd($lastSegment);
    //     $data = template::findOrFail($lastSegment);   
    //     // dd($data);
    //     $background = template::all();
    //     return view('Dashboard_user.pages5')->with('data', $data);
    // }
    {
        $lastSegment = collect(request()->segments())->last();
        // dd($lastSegment);

        //live previeu
        $data = microsite::findOrFail($lastSegment);

        $id_komponen_array = explode(',', $data->id_komponen);
        $komponen = array();
        foreach ($id_komponen_array as $key => $row) {
            $komponens = komponen::find($row);
            if ($komponens) {
                $komponen[$key]['id'] = $komponens->id;
                $komponen[$key]['code'] = $komponens->code;
            }
        }

        $konten = konten::where('id_microsite', $lastSegment)->get();

        $template = template::findOrFail($data->id_template);
        if ($konten) {
            $konten = $konten;
        } else {
            $konten = [];
        }

        //drag and drop
        $drag = microsite_detail::where('id_microsite', $lastSegment)->orderBy('order', 'ASC')->get();
        return view('Dashboard_user.pages5', ['data' => $komponen, 'background' => $template, 'konten' => $konten, 'drag' => $drag]);
    }

    public function delete($id)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $item = microsite::findOrFail($id); //mencari data item dengan ID yang diberikan

        $item->delete(); //menghapus item
        $user->jumlah_microsite -= 1;
        $user->update();
        return redirect()->back()->with('success', 'Data berhasil dihapus.'); //redirect kembali ke halaman sebelumnya dengan pesan sukses
    }
}
