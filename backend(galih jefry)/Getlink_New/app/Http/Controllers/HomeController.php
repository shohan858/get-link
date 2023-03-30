<?php

namespace App\Http\Controllers;

use App\Models\CollabModel;
use App\Models\getlink;
use App\Models\shortlink;
use Illuminate\Http\Request;
use Str;

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
        $request->validate([
            'link' => 'required|url',
            // 'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        ]);

        $input['link'] = $request->link;
        $link =  $input['code'] = Str::random(6);

        shortlink::create($input);

        $shortenLinks = config('app.url') . '/' . 'code';
        return response()->json(['short_link' => $link]);
    }
    public function ShortenLink($code)
    {
        $shortLink = ShortLink::where('code', $code)->firstOrFail();
        
        $shortLink->increment('clicks');

        return redirect($shortLink->link);
    }
}
