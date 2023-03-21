<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\link;
class shortlink_controller extends Controller
{
    public function short(){
        $page_title = 'Short Link';
        $page_description = 'Short your link';
        $my_link = link::where('id_user',auth()->user()->id)->get();
        $my_link_qty = count($my_link);

        $data = [
            'page_title' => $page_title,
            'page_description' => $page_description,
            'my_link'   => $my_link,
            'links' => link::pluck('short_link')->toArray(),
            'my_link_qty' => $my_link_qty,
        ];
        return view('pages/shortlink/index',$data);
    }
    public function edit_link(Request $request){
        $link = link::find($request->id);
        $link->short_link = $request->short_link;
        $link->save();

        return back();
    }
    public function hapus_link(Request $request){
        $id = $request->id;
        $link = link::find($id);
        $link->delete();

        return back();
    }
    public function tess(){
        return view('pages.shortlink.tes');
    }
    public function fetch_link(){
        $links = link::pluck('short_link')->toArray();

        return response()->json([
            'links'=>$links,
        ]);
    }
    public function store(Request $request){
        $short_link = $request->input('shorten_link');
        $real_link = $request->input('real_link');
        if($request->input('id') != 1){
            $id_user = $request->input('id');
        }else{
            $id_user = 1;
        }
        $link = new link();
        $link->id_user = $id_user;
        $link->real_link = $real_link;
        $link->short_link = $short_link;
        $link->save();

        return response()->json([
            'status'=>200,
        ]);
    }
    public function fetch_my_link(){
        $my_link = link::where('id_user',auth()->user()->id)->get();
        // dd($my_link);

        return response()->json([
            'my_links'=>$my_link,
        ]);
    }
    public function short_run($code){
        $link = link::where('short_link', $code)->first();
        if($link){
            return redirect($link->real_link);
        }else{
            return view('pages/not_found');
        }
    }
    public function tes(){
        $data = [
            'links' => link::pluck('short_link')->toArray(),
        ];
        return view('pages/tes',$data);
    }
}
