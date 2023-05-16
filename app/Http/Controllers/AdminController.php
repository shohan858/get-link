<?php

namespace App\Http\Controllers;

use App\Models\budgetModel;
use App\Models\CollabModel;
use App\Models\getlink;
use App\Models\kategori;
use App\Models\komponen;
use App\Models\microsite;
use App\Models\paketModel;
use App\Models\shortlink;
use App\Models\template;
use App\Models\transaksi;
use App\Models\transaksichartModel;
use App\Models\User;
use App\Models\visitorModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
// use Yajra\DataTables\Facades\DataTables;
use Datatables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\Contracts\DataTable;

use function GuzzleHttp\Promise\all;

class AdminController extends Controller
{
    public function index()
    {
        $check = User::find(Auth::user()->id);
        $link = "landing_page";
        $all_count = 0;
        //pengchekan visitor
        if(empty($check->all_visitor_total)){
            $check->all_visitor_total = "0,0,0,0,0,0,0,0,0,0,0,0," . date('Y');
            $check->update();
        }elseif(!strpos($check->all_visitor_total, date('Y')) !== false){
            $check->all_visitor_total2 = $check->all_visitor_total;
            $check->all_visitor_total = "0,0,0,0,0,0,0,0,0,0,0,0," . date('Y');
            $check->update();
            if(!strpos($check->all_visitor_total2, date('Y', strtotime("-1 year")))){
                $check->all_visitor_total3 = $check->all_visitor_total2;
                $check->all_visitor_total2 = "0,0,0,0,0,0,0,0,0,0,0,0," . date('Y', strtotime("-1 year"));
                $check->update();
            }
        }

        $count = visitorModel::where('id_microsite', $link)->count();
        $all_count = $count;

        $str = $check->all_visitor_total;
        $update_count = substr_replace($str, strval($all_count), ((date('n') - 1) * 2), 1);
        $check->all_visitor_total = $update_count;
        $check->update();

        $total_pengunjung_tahun_ini = explode(',', $check->all_visitor_total);
        $total_pengunjung_tahun_kemarin = explode(',', $check->all_visitor_total2);
        $total_pengunjung_tahun_kemarin2 = explode(',', $check->all_visitor_total3);
        //end pengchekan visitor
        

        //proses update pendapatan dan penjualan
        $update_pendapatan = transaksichartModel::whereYear('created_at', date('Y'))->first();
        $total_pendapatan = explode(',', $update_pendapatan->total_pendapatan);
        $count_pendapatan = transaksi::where('status', 'PAID')->whereYear('created_at', date('Y'))->pluck('total');        
        $total_pendapatan[intval(date('m')) - 1] = strval(array_sum($count_pendapatan->toArray()));
        $update_pendapatan->total_pendapatan = implode(',', $total_pendapatan);
        $update_pendapatan->save();

        $update_penjualan = transaksichartModel::whereYear('created_at', date('Y'))->first();
        $total_penjualan = explode(',', $update_penjualan->total_penjualan);
        $where_penjualan = transaksi::where('status', 'PAID')->whereYear('created_at', date('Y'))->pluck('total');
        $count_penjualan = $where_penjualan->count();
        $total_penjualan[intval(date('m')) - 1] = strval($count_penjualan);
        $update_penjualan->total_penjualan = implode(',', $total_penjualan);
        $update_penjualan->save();

        //end proses update pendapatan dan penjualan

        //total pendapatan dan penjualan
        $data = transaksichartModel::latest('created_at')->whereYear('created_at', date('Y'))->first();
        $data_tahun_kemarin = transaksichartModel::latest('created_at')->whereYear('created_at', (date('Y') - 1))->first();
        $data_tahun_kemarin2 = transaksichartModel::latest('created_at')->whereYear('created_at', (date('Y') - 2))->first();

        if($data === null){
            //jika null maka akan buat baru
            $new = new transaksichartModel();
            $new->total_pendapatan = "0,0,0,0,0,0,0,0,0,0,0,0";
            $new->total_penjualan = "0,0,0,0,0,0,0,0,0,0,0,0";
            $new->save();
            dd('null');
        }

        $total_penjualan_tahun_ini = explode(',', $data->total_penjualan);
        $total_pendapatan_tahun_ini = explode(',', $data->total_pendapatan);
        if($data_tahun_kemarin) {
            $total_pendapatan_tahun_kemarin = explode(',', $data_tahun_kemarin->total_pendapatan);
            $total_penjualan_tahun_kemarin = explode(',', $data_tahun_kemarin->total_penjualan);
        } else {
            $total_pendapatan_tahun_kemarin = array_fill(0,0,0);
            $total_penjualan_tahun_kemarin = array_fill(0,0,0);
        }

        if($data_tahun_kemarin2) {
            $total_pendapatan_tahun_kemarin2 = explode(',', $data_tahun_kemarin2->total_pendapatan);
            $total_penjualan_tahun_kemarin2 = explode(',', $data_tahun_kemarin2->total_penjualan);

        } else {
            $total_pendapatan_tahun_kemarin2 = array_fill(0,0,0);
            $total_penjualan_tahun_kemarin2 = array_fill(0,0,0);
        }
        //end total pendapatan dan pejualan

        
        // foreach ($data as $key => $value) {
        //     $data_arr = json_decode($value, true); // ubah JSON menjadi array PHP
        //     $total_penjualan = explode(',', $data_arr['total_penjualan']); // pisahkan data total_penjualan menjadi array
        //     $total_pendapatan = explode(',', $data_arr['total_pendapatan']); // pisahkan data total_pendapatan menjadi array
        //     if (strpos($value, date('Y')) !== false) {
        //         $total_penjualan_tahun_ini = $total_penjualan;
        //         $total_pendapatan_tahun_ini = $total_pendapatan;
        //     } elseif (strpos($value, date('Y', strtotime("-1 year"))) !== false) {
        //         $total_penjualan_tahun_kemarin = $total_penjualan;
        //         $total_pendapatan_tahun_kemarin = $total_pendapatan;
        //     } elseif (strpos($value, date('Y', strtotime("-2 year"))) !== false) {
        //         $total_penjualan_tahun_kemarin2 = $total_penjualan;
        //         $total_pendapatan_tahun_kemarin2 = $total_pendapatan;
        //     }
        // }
        //end total pendapatan dan pejualan
        
        array_pop($total_pengunjung_tahun_ini); // hapus elemen terakhir dari array
        array_pop($total_pengunjung_tahun_kemarin); // hapus elemen terakhir dari array
        array_pop($total_pengunjung_tahun_kemarin2); // hapus elemen terakhir dari array
        // array_pop($total_penjualan_tahun_ini); // hapus elemen terakhir dari array
        // array_pop($total_penjualan_tahun_kemarin); // hapus elemen terakhir dari array
        // array_pop($total_penjualan_tahun_kemarin2); // hapus elemen terakhir dari array

        return View('admin.admin_pages.dashboard')->with([
            'total_pengunjung_tahun_ini' => $total_pengunjung_tahun_ini,
            'total_pengunjung_tahun_kemarin' => $total_pengunjung_tahun_kemarin,
            'total_pengunjung_tahun_kemarin2' => $total_pengunjung_tahun_kemarin2,
            'total_penjualan_tahun_ini' => $total_penjualan_tahun_ini,
            'total_penjualan_tahun_kemarin' => $total_penjualan_tahun_kemarin,
            'total_penjualan_tahun_kemarin2' => $total_penjualan_tahun_kemarin2,
            'total_pendapatan_tahun_ini' => $total_pendapatan_tahun_ini,
            'total_pendapatan_tahun_kemarin' => $total_pendapatan_tahun_kemarin,
            'total_pendapatan_tahun_kemarin2' => $total_pendapatan_tahun_kemarin2
        ]);
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
        // dd($request);
        // $alert = alert()->info('Gagal Edit','Title Belum Di Isi');
        $request->validate([
            'image_landing' => 'mimes:jpeg,png,jpg,gif,svg',
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
        $microsite = Microsite::join('users', 'users.id', '=', 'microsites.id_user')
                       ->join('templates', 'templates.id', '=', 'microsites.id_template')
                       ->join('kategoris', 'kategoris.id', '=', 'microsites.id_kategori')
                       ->select('microsites.id', 'users.name AS user_name', 'templates.title AS template_name', 'microsites.name AS microsite_name', 'kategoris.name AS kategori_name', 'microsites.link')
                       ->get();
        return response()->json([
            'message' => 'success',
            'data' => $microsite,
        ], 200);
    }

    public function getdata_transaksi() {
        $transaksi = transaksi::select('id_user', 'status', 'payment_gateway', 'total', 'external_id', 'created_at')->get();
        return response()->json([
            'message' => 'success',
            'data' => $transaksi,
        ], 200);
        return DataTable::of($transaksi)->make();
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
        $users = User::select('id', 'name', 'email', 'role', 'jumlah_microsite')->where('role', 'user')->get();

        $decryptedUsers = $users->map(function($user) {
            $user->jumlah_microsite = decrypt($user->jumlah_microsite);
            return $user;
        });
        
        return response()->json([
            'message' => 'success',
            'data' => $decryptedUsers,
        ], 200);
    }

    public function show_akun($id)
    {
        $account = User::find($id);

        if (!$account) {
            return response()->json(['message' => 'Akun tidak ditemukan'], 404);
        }

        return response()->json(['data' => $account]);
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
        // return DataTable::of($kategori)->make();
    }

    public function table_kategori()
    {
        return view('admin.admin_pages.kategori');
        // return view('admin.kategori.index');
    }

    public function getdata_template()
    {
        $template = template::join('kategoris', 'kategoris.id', '=', 'templates.id_kategori')
        ->join('komponens', 'komponens.id', '=', 'templates.id_komponen')
        ->select('templates.id', 'kategoris.name As kategori_name' , 'komponens.name As komponen_name', 'templates.image', 'templates.title', 'templates.background', 'templates.type_background', 'templates.status')
        ->get();
        return response()->json([
            'message' => 'success',
            'data' => $template,
        ], 200);
    }

	public function get_paket_microsite()
    {
        $paket = paketModel::select('id', 'name', 'type', 'harga', 'shortlink' ,'slot')->get();
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
        if($request->type == "shortlink"){
            $data->shortlink = $request->waktu;
        }
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

    public function show_kategori($id)
    {
        $kategori = kategori::find($id);
        return response()->json($kategori);
    }

    public function updateKategori(Request $request, $id)
{

    $this->validate($request, [
        'name' => 'required',
        'color' => 'required',
        'icon' => 'image|mimes:jpeg,png,jpg,svg',
    ]);

    $kategori = kategori::find($id);
    
    if(!$kategori) {
        return response()->json(['message' => 'Kategori not found'], 404);
    }
    $kategori->name = $request->name;
    $kategori->color = $request->color;
    if ($request->hasFile('icon')) {
        // dd($request->icon);
        // dd($request->name);
        $file = $request->file('icon');
        
        $fileName = Carbon::now()->timestamp . '.' . $file->extension();
        $file->move(public_path('microsite/kategori'), $fileName);
        $kategori->icon = $fileName;

        $lama = kategori::where('id', $id)->first();
        File::delete(public_path('microsite/kategori') . '/' . $lama->icon);
        }
    $kategori->update();
    // dd($kategori->name);
        return redirect()->back();
}


    public function tambah_kategori(Request $request)
    {
            // dd($request->icon);
        $this->validate($request, [
                'name' => 'required',
                'color' => 'required',
                'icon' => 'required|image|mimes:jpeg,png,jpg,svg',
            ]);
            
            $kategori = new kategori();
            $kategori->name = $request->input('name');
            $kategori->color = $request->input('color');
            // dd($kategori->name);
            
            if ($request->hasFile('icon')) {
            // dd($request->name);
            $file = $request->file('icon');
            
            $fileName = Carbon::now()->timestamp . '.' . $file->extension();
            $file->move(public_path('microsite/kategori'), $fileName);
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
        $this->validate($request, [
            'title' => 'required',
            'id_kategori' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg',
        ]);

        // dd($request);
        $id_komponen = '';
        $status_komponen = '';
        $komponen = komponen::whereNotIn('id', [12])->get();
        foreach($komponen as $k){
            $id_komponen .= $k->id . ',';
            $status_komponen .= 'on'. ',';
        }

        $template = new template();
        $template->title = $request->input('title');
        $template->id_kategori = $request->input('id_kategori');
        $template->type_background = $request->input('type_background');
        $template->id_komponen = $id_komponen;
        $template->status_komponen = $status_komponen;
        $template->value_konten_detail = 0;
        $template->status = 'pending';

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

    public function edit_template($id)
    {
        $microkon_kode = '';
        $microdet = template::findOrFail(intval($id));
        $array = explode(',', rtrim($microdet->id_komponen, ','));
        $status = explode(',', rtrim($microdet->status_komponen, ','));
        $komponen = array();

        foreach ($array as $key => $row) {
            $komponen_oke = komponen::find($row);

            if($status[$key] === 'on') {

                if($row === '9') {
                    $microkon_kode = '';
                    for($i = 1; $i <= intval($microdet->value_konten_detail); $i++) {
                        $microkon_kode .= '<a href="https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4" class="konten-template">
                        <img class="img-template" src="microsite/konten/okk.jpg" alt="">
                        </a>';
                    }
                    $komponen_code = '<div class="bungkus-anak" id="bungkus-template-konten">' . $microkon_kode . '</div>';
                    $komponen[$key]['id'] = 9;
                    $komponen[$key]['code'] = $komponen_code;
                }
                elseif ($komponen_oke === null) {
                }
                else {
                    $komponen[$key]['id'] = $komponen_oke->id;
                    $komponen[$key]['code'] = $komponen_oke->code;
                }

            }
        }

        if (in_array('9', $array)) {
            $tambah_komponen = komponen::whereNotIn('id', [11, 12])->get();
        } else {
            $tambah_komponen = komponen::where('id', '<>', 12)->get();
        }
        //button tambah komponen

        //drag and drop

        $dragss = [];

        foreach ($array as $key => $row) {
            $komponen_oke = komponen::findOrFail($row);
            $dragss[$key]['status'] = $status[$key];
            $dragss[$key]['id'] = $key;
            $dragss[$key]['order'] = $key;
            $dragss[$key]['id_komponen'] = $array[$key];
            $dragss[$key]['title'] = $komponen_oke->name;
        }
        return view('admin.template.edit', ['data' => $komponen, 'background' => $microdet, 'drag' => $dragss, 'tambah_komponen' => $tambah_komponen]);
    }

    public function update_template(Request $request, $id)
    {
        // dd($id);
        $id_komponen = $request->input('id_komponen', []);

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
        $budget = budgetModel::first();
        if($budget == null){
            $new = new budgetModel();
            $new->budget = 0;
            $new->save();
        }
        $saldo = number_format($budget->budget, 0, ',', '.');
        return View('admin.admin_pages.budget')->with('saldo', $saldo);
    }

    public function transaksi() {
        return View('admin.admin_pages.transaksi');
    }

    public function show_paket($id)
    {
        $paket = paketModel::find($id);
        return response()->json($paket);
    }

    public function updatepaket(Request $request, $id)
    {

        $paket = paketModel::find($id);
        
        if(!$paket) {
            return response()->json(['message' => 'Paket not found'], 404);
        }

        $paket->name = $request->name;
        $paket->type = $request->type;
        $paket->harga = $request->harga;
        $paket->slot = $request->slot;

        $paket->update();
        return redirect()->back();
    }

    
    public function preview_template($id) 
    {
        $template = template::findOrFail($id);

        $array = explode(',', rtrim($template->id_komponen, ','));
        $komponen = array();

        foreach ($array as $key => $row) {
            $komponen_oke = komponen::findOrFail($row);
            if($row === '9') {
                $microkon_kode = '';
                for($i = 1; $i <= intval($template->value_konten_detail); $i++) {
                    $microkon_kode .= '<a href="https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4" class="konten-template">
                    <img class="img-template" src="microsite/konten/okk.jpg" alt="">
                    </a>';
                }
                $komponen_code = '<div class="bungkus-anak" id="bungkus-template-konten">' . $microkon_kode . '</div>';
                $komponen[$key]['id'] = 9;
                $komponen[$key]['code'] = $komponen_code;
            }
            else {
                $komponen[$key]['id'] = $komponen_oke->id;
                $komponen[$key]['code'] = $komponen_oke->code;
            }
        }

        return view('admin.template.preview', ['data' => $komponen, 'background' => $template]);
    }

    public function update_template_admin($id, Request $request) 
    {
        $string = '';
        foreach($request->komponen as $row) 
        {
            $string .= $row . ',';
        }
        $template = template::findOrFail($id);
        $template->id_komponen = $string;
        $template->save();

        return response()->json([
            'message' => 'success',
        ], 200);
    }
    
    public function update_status_template($id, Request $request)
    {
        $template = template::findOrFail($id);
        $array = explode(',', $template->status_komponen);
        $array[$request->id] = $request->status;
        $string = implode(",", $array);
        $template->status_komponen = $string;
        $template->save();

        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function hapus_komponen_template($id, Request $request)
    {
        $template = template::findOrFail($id);
        $array1 = explode(',', $template->id_komponen);
        $array = explode(',', $template->status_komponen);
        if($array1[$request->id] === '9') 
        {
            $template->value_konten_detail = 0;
        }
        unset($array1[$request->id]);
        unset($array[$request->id]);
        $string = implode(",", $array);
        $string1 = implode(",", $array1);
        $template->id_komponen = $string1;
        $template->status_komponen = $string;
        $template->save();

        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function tambah_komponen_template($id, Request $request)
    {
        $template = template::findOrFail($id);
        $array = explode(',', $template->id_komponen);
        
        if($request->id === '9')
        {
            if (in_array("9", $array))
            {
                $template->value_konten_detail = $template->value_konten_detail + 1;
            } else {
                $template->id_komponen = $template->id_komponen . $request->id . ',';
                $template->status_komponen = $template->status_komponen . 'on' . ',';
            }
        }
        else
        {
            $template->id_komponen = $template->id_komponen . $request->id . ',';
            $template->status_komponen = $template->status_komponen . 'on' . ',';
        }

        $template->save();

        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function update_background_template($id, Request $request)
    {
        $microsite = template::findOrFail($id);

        if ($request->hasFile('background')) {
            $file = $request->file('background');

            $filenm = Carbon::now()->timestamp . '.' . $file->extension();
            $file->storeAs('microsite/background/', $filenm);
            $microsite->background = $filenm;
            $microsite->type_background = 'image';
        } else {
            $microsite->background = $request->background;
            $microsite->type_background = 'color';
        }

        $microsite->save();

        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function update_status_template_edit($id, Request $request) {
        $microsite = template::findOrFail($id);
        $microsite->status = 'on';
        $microsite->save();

        return response()->json([
            'message' => 'success',
        ], 200);
    }
}
