<?php

namespace App\Http\Controllers;

use App\Models\BudgetModel;
use App\Models\CollabModel;
use App\Models\getlink;
use App\Models\getlink_image;
use App\Models\IconModel;
use App\Models\microsite;
use App\Models\MicrositeSlotModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class landing_pageController extends Controller
{
    public function admin()
    {
        $microsite = microsite::all()->count();
        $user = User::all()->count();
        $budget = BudgetModel::where('id',1)->first();
        $budgetall = BudgetModel::all()->count();
        $m_slot = MicrositeSlotModel::all()->count();
        if(Auth::user()->role_id == 1){
            return view('user_pages.dashboard');
        }
        return view('admin')->with([
            'microsite'=>$microsite,
            'user'=>$user,
            'budget'=>$budget,
            'm_slot'=>$m_slot,
            'budget_all'=>$budgetall
        ]);
    }

    public function index()
    {
        $data = getlink::all();
        $data2 = getlink_image::all();
        $data3 = CollabModel::all();
        $no = 1;
        return view('landing_page2')->with('data_getlink', $data)->with('data_image', $data2)->with('no', $no)->with('data3', $data3);
    }

    public function index2()
    {
        $data = getlink::all();
        $data2 = getlink_image::all();
        $data3 = CollabModel::all();
        $no = 1;
        return view('landing_page')->with('data_getlink', $data)->with('data_image', $data2)->with('no', $no)->with('data3', $data3);
    }

    public function edit_landing_page()
    {
        $data = getlink::all();
        $data2 = getlink_image::all();
        $data3 = CollabModel::all();
        $no = 1;
        $icon = IconModel::all();
        return view("edit_landing_page")->with("data_getlink", $data)->with("data_image", $data2)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('icon', $icon)->with('no_image', $no);
    }

    public function edit_keunggulan($id){
        $data = getlink::where('id',$id)->first();
        return view('landing_page.edit_keunggulan')->with([
            'data' => $data
        ]);
    }

    public function update_landing_page(Request $request, $id)
    {
        // dd($request);
        $alert = alert()->info('Gagal Edit','Title Belum Di Isi');
        $request->validate([
            // 'image_landing' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            // 'subtitle' => 'required|string|max:255'
        ]);
        $getlink = getlink::find($id);
        $getlink->title = $request->title;
        $getlink->subtitle = $request->subtitle;
        $file = $request->hasFile('image_landing');
        if ($file) {
            $name_image = Carbon::now()->timestamp . '.' . $request->image_landing->extension();
            $request->image_landing->storeAs($name_image);
            $getlink->image = $name_image;
        }

        $getlink->update();
        // $alert = Alert::success('Berhasil', 'Kamu Berhasil Update Data');
        alert()->success('Berhasil','Berhasil Update Data');
        return redirect()->back();
    }

    public function judul1()
    {
        $data = getlink::all();
        $data2 = getlink_image::all();
        $data3 = CollabModel::all();
        $no = 1;
        $icon = IconModel::all();
        return view("landing_page.judul1")->with("data_getlink", $data)->with("data_image", $data2)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('icon', $icon)->with('no_image', $no);
    }
    public function sponsor()
    {
        $data = getlink::all();
        $data2 = getlink_image::all();
        $data3 = CollabModel::all();
        $no = 1;
        $icon = IconModel::all();
        return view("landing_page.sponsor")->with("data_getlink", $data)->with("data_image", $data2)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('icon', $icon)->with('no_image', $no);
    }
    public function judul2()
    {
        $data = getlink::all();
        $data2 = getlink_image::all();
        $data3 = CollabModel::all();
        $no = 1;
        $icon = IconModel::all();
        return view("landing_page.judul2")->with("data_getlink", $data)->with("data_image", $data2)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('icon', $icon)->with('no_image', $no);
    }
    public function judul3()
    {
        $data = getlink::all();
        $data2 = getlink_image::all();
        $data3 = CollabModel::all();
        $no = 1;
        $icon = IconModel::all();
        return view("landing_page.judul3")->with("data_getlink", $data)->with("data_image", $data2)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('icon', $icon)->with('no_image', $no);
    }
    public function judul4()
    {
        $data = getlink::all();
        $data2 = getlink_image::all();
        $data3 = CollabModel::all();
        $no = 1;
        $icon = IconModel::all();
        return view("landing_page.judul4")->with("data_getlink", $data)->with("data_image", $data2)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('icon', $icon)->with('no_image', $no);
    }
    public function judul5()
    {
        $data = getlink::all();
        $data2 = getlink_image::all();
        $data3 = CollabModel::all();
        $no = 1;
        $icon = IconModel::all();
        return view("landing_page.judul5")->with("data_getlink", $data)->with("data_image", $data2)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('icon', $icon)->with('no_image', $no);
    }
    public function keunggulan()
    {
        $data = getlink::all();
        $data2 = getlink_image::all();
        $data3 = CollabModel::all();
        $no = 1;
        $icon = IconModel::all();
        return view("landing_page.keunggulan")->with("data_getlink", $data)->with("data_image", $data2)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('icon', $icon)->with('no_image', $no);
    }

    // public function update_collab(Request $request, $id) {
    //     $getlink_image = getlink_image::find($id);
    //     $file1 = $request->hasFile('image1');
    //     $file2 = $request->hasFile('image2');
    //     $file3 = $request->hasFile('image3');
    //     $file4 = $request->hasFile('image4');
    //     $file5 = $request->hasFile('image5');
    //     if($file1) {
    //         $name_image = Carbon::now()->timestamp. '.' . $request->image1->extension();
    //         $request->image1->storeAs($name_image);
    //         $getlink_image->image1 = $name_image;
    //     }
    //     if($file2) {
    //         $name_image = Carbon::now()->timestamp. '.' . $request->image2->extension();
    //         $request->image2->storeAs($name_image);
    //         $getlink_image->image2 = $name_image;
    //     }
    //     if($file3) {
    //         $name_image = Carbon::now()->timestamp. '.' . $request->image3->extension();
    //         $request->image3->storeAs($name_image);
    //         $getlink_image->image3 = $name_image;
    //     }
    //     if($file4) {
    //         $name_image = Carbon::now()->timestamp. '.' . $request->image4->extension();
    //         $request->image4->storeAs($name_image);
    //         $getlink_image->image4 = $name_image;
    //     }
    //     if($file5) {
    //         $name_image = Carbon::now()->timestamp. '.' . $request->image5->extension();
    //         $request->image5->storeAs($name_image);
    //         $getlink_image->image5 = $name_image;
    //     }

    //     $getlink_image->update();
    //     return redirect('/edit_landing_page');
    // }
}
