<?php

namespace App\Http\Controllers;

use App\Models\CollabModel;
use App\Models\getlink;
use App\Models\kategori;
use App\Models\komponen;
use App\Models\microsite;
use App\Models\paketModel;
use App\Models\shortlink;
use App\Models\template;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
// use Yajra\DataTables\Facades\DataTables;
use Datatables;
use Yajra\DataTables\Contracts\DataTable;

use function GuzzleHttp\Promise\all;

class AdminController extends Controller
{
    public function index()
    {
        // return view('admin.index');
        return View('admin.admin_pages.dashboard');
    }

    public function halaman_utama()
    {
        // return view('admin.layout');
        return view('admin.admin_pages.halaman_utama');
    }

    public function get_link()
    {
        $data = getlink::all();
        $data3 = CollabModel::all();
        $no = 1;
        // return view("admin.landing_page.judul1")->with("data_getlink", $data)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('no_image', $no);
        return view('admin.admin_pages.edit_landingPage.get_link')->with([
            'data_getlink' => $data,
            'data3' => $data3,
        ]);
    }
    public function sponsor()
    {
        $data = getlink::all();
        $data3 = CollabModel::all();
        $no = 1;
        // return view("admin.landing_page.sponsor")->with("data_getlink", $data)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('no_image', $no);
        return view('admin.admin_pages.edit_landingPage.sponsor')->with([
            'data_getlink' => $data,
            'data3' => $data3,
            'no' => $no
        ]);
    }
    public function short_link()
    {
        $data = getlink::all();
        $data3 = CollabModel::all();
        $no = 1;
        // return view("admin.landing_page.judul2")->with("data_getlink", $data)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('no_image', $no);
        return view('admin.admin_pages.edit_landingPage.short_link')->with([
            'data_getlink' => $data,
            'data3' => $data3,
        ]);
    }
    public function microsite1()
    {
        $data = getlink::all();
        $data3 = CollabModel::all();
        $no = 1;
        // return view("admin.landing_page.judul3")->with("data_getlink", $data)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('no_image', $no);
        return view('admin.admin_pages.edit_landingPage.microsite1')->with([
            'data_getlink' => $data,
            'data3' => $data3,
        ]);
    }
    public function microsite2()
    {
        $data = getlink::all();
        $data3 = CollabModel::all();
        $no = 1;
        // return view("admin.landing_page.judul4")->with("data_getlink", $data)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('no_image', $no);
        return view('admin.admin_pages.edit_landingPage.microsite2')->with([
            'data_getlink' => $data,
            'data3' => $data3,
        ]);
    }
    public function cms()
    {
        $data = getlink::all();
        $data3 = CollabModel::all();
        $no = 1;
        // return view("admin.landing_page.judul5")->with("data_getlink", $data)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('no_image', $no);
        return view('admin.admin_pages.edit_landingPage.cms')->with([
            'data_getlink' => $data,
            'data3' => $data3,
        ]);
    }
    public function keunggulan()
    {
        $data = getlink::all();
        $data3 = CollabModel::all();
        $no = 1;
        // return view("admin.landing_page.keunggulan")->with("data_getlink", $data)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('no_image', $no);
        return view('admin.admin_pages.edit_landingPage.keunggulan_website')->with([
            'data_getlink' => $data,
            'data3' => $data3,
        ]);
    }

    public function update_landing_page(Request $request, $id)
    {
        // dd($request->image_landing);
        // $alert = alert()->info('Gagal Edit','Title Belum Di Isi');
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
            $request->image_landing->move(public_path('gambar'), $name_image);
            $getlink->image = $name_image;
        }

        $getlink->update();
        // $alert = Alert::success('Berhasil', 'Kamu Berhasil Update Data');
        // alert()->success('Berhasil','Berhasil Update Data');
        return redirect()->back();
    }

    public function getdata()
    {
        $microsite = microsite::select('id', 'id_user', 'name', 'id_template', 'id_kategori')->get();
        return response()->json([
            'message' => 'success',
            'data' => $microsite,
        ], 200);
        return DataTable::of($microsite)->make();
    // return DataTables::of($microsite)->make();
    }

    public function table_microsite()
    {
        // return view('admin.microsite.index');
        return view("admin.admin_pages.microsite");
    }

    public function getdata_akun()
    {
        $users = User::select('id', 'name', 'email', 'role')->where('role', 'admin')->get();
        return response()->json([
            'message' => 'success',
            'data' => $users,
        ], 200);
    }

    public function getdata_akun_user()
    {
        $users = User::select('id', 'name', 'email', 'role')->where('role', 'user')->get();
        return response()->json([
            'message' => 'success',
            'data' => $users,
        ], 200);
    }

    public function table_akun()
    {
        // return view('admin.akun.index');
        return view('admin.admin_pages.account.acc');
    }

    public function getdata_kategori()
    {
        $kategori = kategori::select('id', 'name', 'color', 'icon')->get();
        return response()->json([
            'message' => 'success',
            'data' => $kategori,
        ], 200);
        return DataTable::of($kategori)->make();
    }

    public function table_kategori()
    {
        return view('admin.admin_pages.kategori');
        // return view('admin.kategori.index');
    }

    public function getdata_template()
    {
        $template = template::select('id', 'id_kategori', 'id_komponen', 'image', 'title', 'background', 'type_background','status')->get();
        return response()->json([
            'message' => 'success',
            'data' => $template,
        ], 200);
    }

    public function get_paket_microsite()
    {
        $paket = paketModel::select('id', 'name', 'type', 'harga', 'slot')->get();
        return response()->json([
            'message' => 'success',
            'data' => $paket,
        ], 200);
    }

    public function delete_paket_microsite($id)
    {
        $paket = paketModel::findOrFail($id);
        $paket->delete();
        return redirect()->back('')->with('sukses', 'Kategori berhasil dihapus.');
    }

    public function tambah_paket_microsite(Request $request)
    {
        $data = new paketModel();
        $data->name = $request->name;
        $data->type = $request->type;
        $data->harga = $request->harga;
        $data->slot = $request->slot;
        $data->save();

        return back()->with('success', 'Data berhasil ditambahkan.');
    }

    public function paket_microsite()
    {
        return view('admin.admin_pages.paket');
        // return view("admin.transaksi.index");
    }

    public function table_template()
    {
        $komponen = komponen::all();
        $kategori = kategori::all();
        // return view('admin.template.index')->with([
        //     'komponen' => $komponen,
        //     'kategori' => $kategori,
        // ]);
        return view('admin.admin_pages.template')->with([
                'komponen' => $komponen,
                'kategori' => $kategori,
            ]);
    }

    public function tambah_kategori(Request $request)
    {
            // dd($request->icon);
        // $this->validate($request, [
            //     'name' => 'required',
            //     'color' => 'required',
            //     'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            // ]);
            
            $kategori = new kategori();
            $kategori->name = $request->input('name');
            $kategori->color = $request->input('color');
            // dd($kategori->name);
            
            if ($request->hasFile('icon')) {
            // dd($request->name);
            $file = $request->file('icon');
            
            $fileName = Carbon::now()->timestamp . '.' . $file->extension();
            $file->storeAs('/microsite/kategori/', $fileName);
            $kategori->icon = $fileName;
            }

        $kategori->save();

        return back()->with('success', 'Data berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        // Cari data kategori dengan ID yang sesuai
        $kategori = Kategori::findOrFail($id);

        // Hapus data kategori dari database
        $kategori->delete();

        // Redirect kembali ke halaman index dengan flash message sukses
        return redirect()->back('')->with('sukses', 'Kategori berhasil dihapus.');
    }

    public function tambah_template(Request $request)
    {
        // dd($request);
        $id_komponen = $request->input('id_komponen', []);

        // dd($request);
        // $this->validate($request, [
        //     'name' => 'required',
        //     'color' => 'required',
        //     'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        // ]);

        $template = new template();
        $template->title = $request->input('title');
        $template->id_kategori = $request->input('id_kategori');
        $template->type_background = $request->input('type_background');
        // $template->id_komponen = implode(",", $id_komponen);
        $template->id_komponen = "1,2,8,9,10,11";
        $template->status = "pending";

        // dd($template->id_komponen);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/microsite/template_image/');
            $file->move($destinationPath, $fileName);
            $template->image = $fileName;
        }

        if ($template->type_background == 'color') {
            $template->background = $request->input('background');
        } else {
            if ($request->hasFile('background')) {
                $file = $request->file('background');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('/microsite/background/');
                $file->move($destinationPath, $fileName);
                $template->background = $fileName;
            }
        }

        $template->save();

        return back()->with('success', 'Data berhasil ditambahkan.');
    }

    public function destroy_template($id)
    {

        // Cari data kategori dengan ID yang sesuai
        $template = template::findOrFail($id);

        $data = template::where('id', $id)->first();
        File::delete(public_path('gambar') . '/' . $data->image);
        File::delete(public_path('gambar') . '/' . $data->background);

        // Hapus data template dari database
        $template->delete();


        // Redirect kembali ke halaman index dengan flash message sukses
        return redirect()->back('')->with('sukses', 'Kategori berhasil dihapus.');
    }

    public function lihat_template($id)
    {
        $template = template::where('id', $id)->first();
        $kategori = kategori::all();
        $komponen = komponen::all();
        $data_kategori = kategori::where('id', $template->id_kategori)->first();
        // $data_komponen = komponen::where('id',$template->id_komponen)->first();
        // dd($template['id_komponen']);
        return view('admin.admin_pages.detail')->with([
            'template' => $template,
            'kategori' => $kategori,
            'komponen' => $komponen,
            'data_kategori' => $data_kategori,
            // 'data_komponen'=>$data_komponen,
        ]);
    }

    public function edit_template($id)
    {
        $template = template::where('id', $id)->first();
        $kategori = kategori::all();
        $komponen = komponen::all();
        $data_kategori = kategori::where('id', $template->id_kategori)->first();
        // $data_komponen = komponen::where('id',$template->id_komponen)->first();
        // dd($template['id_komponen']);
        return view('admin.admin_pages.edit')->with([
            'template' => $template,
            'kategori' => $kategori,
            'komponen' => $komponen,
            'data_kategori' => $data_kategori,
            // 'data_komponen'=>$data_komponen,
        ]);
    }

    public function update_template(Request $request, $id)
    {
        // dd($id);
        $id_komponen = $request->input('id_komponen', []);

        // dd($request);
        // $this->validate($request, [
        //     'name' => 'required',
        //     'color' => 'required',
        //     'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        // ]);

        $template = template::findOrFail($id);
        // dd($template->id);
        $template->title = $request->input('title');
        $template->id_kategori = $request->input('id_kategori');
        $template->type_background = $request->input('type_background');
        $template->id_komponen = implode(",", $id_komponen);

        // dd($template->id_komponen);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/gambar');
            $file->move($destinationPath, $fileName);
            $template->image = $fileName;
        }

        if ($template->type_background == 'color') {
            $template->background = $request->input('background');
        } else {
            if ($request->hasFile('background')) {
                $file = $request->file('background');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('/gambar');
                $file->move($destinationPath, $fileName);
                $template->background = $fileName;
            }
        }

        $template->update();

        return redirect('/table_template')->with('success', 'Data berhasil diupdate.');
    }

    public function edit_paket($id)
    {
        $paket = paketModel::where('id',$id)->first();
        return view('admin.transaksi.edit')->with([
            'paket' => $paket
        ]);
    }

    public function update_paket(Request $request, $id)
    {
        $data = paketModel::findOrFail($id);
        $data->name = $request->name;
        $data->type = $request->type;
        $data->harga = $request->harga;
        $data->slot = $request->slot;
        $data->update();

        return redirect('/paket_microsite');
    }

    public function preview(){
        $data = getlink::all();
        $data3 = CollabModel::all();
        $shortenLinks = shortlink::latest()->get();
        $no = 1;
        return view('admin.preview.index', compact('shortenLinks'))->with('data_getlink', $data)->with('no', $no)->with('data3', $data3);
    }

    public function budget() {
        return View('admin.admin_pages.budget');
    }
}