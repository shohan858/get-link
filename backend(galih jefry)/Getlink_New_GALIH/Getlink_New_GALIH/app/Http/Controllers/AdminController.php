<?php

namespace App\Http\Controllers;

use App\Models\CollabModel;
use App\Models\getlink;
use App\Models\kategori;
use App\Models\microsite;
use App\Models\paketModel;
use App\Models\template;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function layout()
    {
        return view('admin.layout');
    }

    public function judul1()
    {
        $data = getlink::all();
        $data3 = CollabModel::all();
        $no = 1;
        return view("admin.landing_page.judul1")->with("data_getlink", $data)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('no_image', $no);
    }
    public function sponsor()
    {
        $data = getlink::all();
        $data3 = CollabModel::all();
        $no = 1;
        return view("admin.landing_page.sponsor")->with("data_getlink", $data)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('no_image', $no);
    }
    public function judul2()
    {
        $data = getlink::all();
        $data3 = CollabModel::all();
        $no = 1;
        return view("admin.landing_page.judul2")->with("data_getlink", $data)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('no_image', $no);
    }
    public function judul3()
    {
        $data = getlink::all();
        $data3 = CollabModel::all();
        $no = 1;
        return view("admin.landing_page.judul3")->with("data_getlink", $data)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('no_image', $no);
    }
    public function judul4()
    {
        $data = getlink::all();
        $data3 = CollabModel::all();
        $no = 1;
        return view("admin.landing_page.judul4")->with("data_getlink", $data)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('no_image', $no);
    }
    public function judul5()
    {
        $data = getlink::all();
        $data3 = CollabModel::all();
        $no = 1;
        return view("admin.landing_page.judul5")->with("data_getlink", $data)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('no_image', $no);
    }
    public function keunggulan()
    {
        $data = getlink::all();
        $data3 = CollabModel::all();
        $no = 1;
        return view("admin.landing_page.keunggulan")->with("data_getlink", $data)->with('no', $no)->with('n', $no)->with('data3', $data3)->with('no_image', $no);
    }

    public function update_landing_page(Request $request, $id)
    {
        // dd($request);
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
            $request->image_landing->storeAs($name_image);
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
    }

    public function table_microsite()
    {
        return view('admin.microsite.index');
    }

    public function getdata_akun()
    {
        $user = User::select('id', 'name', 'email', 'role')->get();
        return response()->json([
            'message' => 'success',
            'data' => $user,
        ], 200);
    }

    public function table_akun()
    {
        return view('admin.akun.index');
    }

    public function getdata_kategori()
    {
        $kategori = kategori::select('id', 'name', 'color', 'icon')->get();
        return response()->json([
            'message' => 'success',
            'data' => $kategori,
        ], 200);
    }

    public function table_kategori()
    {
        return view('admin.kategori.index');
    }

    public function getdata_template()
    {
        $template = template::select('id', 'id_kategori', 'id_komponen', 'image', 'title')->get();
        return response()->json([
            'message' => 'success',
            'data' => $template,
        ], 200);
    }

    public function get_paket_microsite() {
        $paket = paketModel::select('id', 'name', 'type', 'harga', 'slot')->get();
        return response()->json([
            'message' => 'success',
            'data' => $paket,
        ], 200);
    }

    public function delete_paket_microsite($id) {
        $paket = paketModel::findOrFail($id);
        $paket->delete();
        return redirect()->back('')->with('sukses', 'Kategori berhasil dihapus.');
    }

    public function tambah_paket_microsite(Request $request) {
        $data = new paketModel();
        $data->name = $request->name;
        $data->type = $request->type;
        $data->harga = $request->harga;
        $data->slot = $request->slot;
        $data->save();
        
        return back()->with('success', 'Data berhasil ditambahkan.');
    }

    public function paket_microsite() {
        return view("admin.transaksi.index");
    }

    public function table_template()
    {
        return view('admin.template.index');
    }

    public function tambah_kategori(Request $request)
    {
        // dd($request);
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
            $file = $request->file('icon');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/gambar');
            $file->move($destinationPath, $fileName);
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


}
