<?php

namespace App\Http\Controllers;

use App\Models\CollabModel;
use App\Models\getlink;
use App\Models\shortlink;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // public function home(){
    //     $data = getlink::all();
    //     $data3 = CollabModel::all();
    //     $no = 1;
    //     return view('Home.landing_page')->with('data_getlink', $data)->with('no', $no)->with('data3', $data3);
    // }
    public function home()
    {
        $data = getlink::all();
        $data3 = CollabModel::all();
        $shortenLinks = shortlink::latest()->get();
        $no = 1;
        return view('Home.landing_page', compact('shortenLinks'))->with('data_getlink', $data)->with('no', $no)->with('data3', $data3);
    }

    public function store(Request $request)
    {
        // Mendapatkan pengguna yang sudah login
        $user = Auth::user();

        // Validasi inputan form
        $request->validate([
            'link' => 'required|url',
            // 'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        ]);

        // Membuat data shortlink baru
        $shortlink = new Shortlink();
        $shortlink->link = $request->link;
        $shortlink->code = Str::random(6);

        // Mengaitkan shortlink dengan ID pengguna yang sudah login
        $shortlink->id_user = $user->id; // Set user_id sesuai dengan ID pengguna yang sudah login

        // Menyimpan data shortlink
        $shortlink->save();

        $shortenLink = $shortlink->code;

        // Mengembalikan response dengan shortlink yang sudah dibuat
        return response()->json(['short_link' => $shortenLink]);
    }
    public function ShortenLink($code)
    {
        $shortLink = ShortLink::where('code', $code)->firstOrFail();
        if ($shortLink) {
            return redirect($shortLink->link);
        } else {
            return redirect('404 Not Found');
        }
    }
}
