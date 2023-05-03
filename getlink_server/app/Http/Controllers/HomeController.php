<?php

namespace App\Http\Controllers;

use App\Models\CollabModel;
use App\Models\getlink;
use App\Models\shortlink;
use App\Models\User;
use App\Models\visitorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

        $jenis_browser = request()->server('HTTP_USER_AGENT');
        $link = "landing_page";

        $visitor = visitorModel::where('id_microsite', $link)
            ->where('ip_address', request()->ip())
            ->where('date', now()->toDateString())
            ->where('browser', $jenis_browser)
            ->count();

        if ($visitor == 0) {
            $test = new visitorModel();
            $test->id_microsite = $link;
            $test->ip_address = request()->ip();
            $test->date = now()->toDateString();
            $test->browser = $jenis_browser;
            $test->save();
            return view('Home.landing_page', compact('shortenLinks'))->with('data_getlink', $data)->with('no', $no)->with('data3', $data3);
        } else {
            return view('Home.landing_page', compact('shortenLinks'))->with('data_getlink', $data)->with('no', $no)->with('data3', $data3);
        }
    }
    public function store(Request $request)
    {
        // Validasi inputan form
        $request->validate([
            'link' => 'required|url',
        ]);

        // Membuat data shortlink baru
        $shortlink = new Shortlink();
        $shortlink->link = $request->link;
        $shortlink->code = Str::random(6);

        // Jika pengguna sudah login
        $user = Auth::user();
        if ($user) {
            // Mengaitkan shortlink dengan ID pengguna yang sudah login
            $shortlink->id_user = $user->id;
            $user->shortlink_count++;
            $user->save();

            // Mengubah status menjadi "off" jika shortlink_count lebih besar dari 10
            if ($user->shortlink_count >= 11) {
                // Mencari link yang ke-11 atau lebih lama
                $links = Shortlink::where('id_user', $user->id)
                    ->orderBy('created_at')
                    ->limit($user->shortlink_count - 10)
                    ->get();

                // Mengubah status pada link-link tersebut menjadi "off"
                foreach ($links as $link) { 
                    $link->status = 'off';
                    $link->save();
                }
            }

            // // Mengubah status pada shortlink yang baru dibuat
            // if ($user->shortlink_count > 10) {
            //     $shortlink->status = 'off';
            // }
        }

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
            // Pengecekan status link pendek
            $status = $shortLink->status;
            if ($status == 'off') {
                return redirect('404 Not Found'); // redirect ke halaman 404 jika status link off
            } else {
                // Pengecekan status berlangganan pengguna
                $isSubscribed = false;
                if (Auth::check()) {
                    $user = Auth::user();
                    $batasMicrosite = decrypt($user->batas_microsite);
                    $isSubscribed = $user->$batasMicrosite > 3;
                }

                // Mengubah status link menjadi off jika pengguna belum berlangganan dan mencoba mengakses link nomor 11 dan seterusnya
                if (!$isSubscribed && (int) substr($code, -2) >= 11) {
                    $shortLink->status = 'off';
                    $shortLink->save();
                    return redirect('404 Not Found');
                } else {
                    return redirect($shortLink->link);
                }
            }
        } else {
            return redirect('404 Not Found');
        }
    }
}
