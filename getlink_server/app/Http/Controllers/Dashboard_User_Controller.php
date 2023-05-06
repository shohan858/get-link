<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\komponen;
use App\Models\konten;
use App\Models\microsite;
use App\Models\microsite_detail;
use App\Models\microsite_detail_konten;
use App\Models\paketModel;
use App\Models\shortlink;
use App\Models\template;
use App\Models\transaksi;
use App\Models\User;
use App\Models\visitorModel;
use App\Models\visitortotalModel;
use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Xendit\Xendit;
use Yajra\DataTables\Contracts\DataTable;

class Dashboard_User_Controller extends Controller
{
    public $id_kategori;
    public function dashboard()
    {
        //pengecheckan
        $check = User::find(Auth::user()->id);
        $link = microsite::where('id_user', Auth::user()->id)->pluck('link');
        $all_count = 0;
        if(empty($check->all_visitor_total)){
            $check->all_visitor_total = "0,0,0,0,0,0,0,0,0,0,0,0," . date('Y');
            $check->update();
        }
        foreach($link as $l){
        $count = visitorModel::where('id_microsite', $l)->count();
            $all_count += $count;
        }
        $str = $check->all_visitor_total;
        $update_count = substr_replace($str, strval($all_count), ((date('n') - 1) * 2), 1);
        $check->all_visitor_total = $update_count;
        $check->update();


        //data grafik
        $data = User::where('id', Auth::user()->id)->get();
        $data_tahun_ini = [];
        $data_tahun_kemarin = [];
        $data_tahun_kemarin2 = [];
        
        foreach ($data as $key => $value) {
            $data_arr = json_decode($value, true); // ubah JSON menjadi array PHP
            $data = explode(',', $data_arr['all_visitor_total']); // pisahkan data total_penjualan menjadi array
            if (strpos($value, date('Y')) !== false) {
                $data_tahun_ini = $data;
            } elseif (strpos($value, date('Y', strtotime("-1 year"))) !== false) {
                $data_tahun_kemarin = $data;
            } elseif (strpos($value, date('Y', strtotime("-2 year"))) !== false) {
                $data_tahun_kemarin2 = $data;
            }
        }

        array_pop($data_tahun_ini); // hapus elemen terakhir dari array
        array_pop($data_tahun_kemarin); // hapus elemen terakhir dari array
        array_pop($data_tahun_kemarin2); // hapus elemen terakhir dari array
        $shortlink_count= User::where('shortlink_count',Auth::user()->shortlink_count)->get();
        $count_microsite = decrypt(User::find(Auth::user()->id)->jumlah_microsite);
        $limit_microsite = decrypt(User::find(Auth::user()->id)->batas_microsite);
        return view('Dashboard_User.dashboard')->with([
            'count_microsite' => $count_microsite, 
            'limit_microsite' => $limit_microsite, 
            'data_tahun_ini' =>  $data_tahun_ini,
            'data_tahun_kemarin' => $data_tahun_kemarin,
            'data_tahun_kemarin2' => $data_tahun_kemarin2,
            'shortlink_count'=> $shortlink_count
        ]);
    }

    public function buat_tautan()
    {
        return view('Dashboard_User.buat_tautan');
    }

    public function page2()
    {
        $template = template::all();
        $id_kategori = template::distinct('id_kategori')->pluck('id_kategori');
        $kategori = kategori::whereIn('id', $id_kategori)->get();
        return view('Dashboard_User.pages2')->with([
            'kategori' => $kategori
        ]);
    }

    public function create_microsite()
    {
        $data = User::find(Auth::user()->id);
        return view('Dashboard_User.pages4')->with('data', $data);
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
        $lastSegment = collect(request()->segments())->last();
        $template = template::findOrFail(intval($lastSegment));
        $array = explode(',', rtrim($template->id_komponen, ','));
        
        $komponen_array = array();
        
        foreach ($array as $key => $row) {
            if ($row === '9') {
                $komponen = komponen::findOrFail(12);
                $microkon_kode = '';
                for ($i = 1; $i <= $template->value_konten_detail; $i++) {
                    $microkon_kode .= $komponen->code;
                }
                $microkon_code = '<div class="bungkus-anak" id="bungkus-template-konten">' . $microkon_kode . '</div>';
                $komponen_array[$key]['id'] = 9;
                $komponen_array[$key]['code'] = $microkon_code;
            } else {
                $komponen = komponen::findOrFail(intval($row));
                $komponen_array[$key]['id'] = $komponen->id;
                $komponen_array[$key]['code'] = $komponen->code;
            }
        }
        
        $template = template::findOrFail($lastSegment);

        return view('Dashboard_User.pages4', ['komponen' => $komponen_array, 'background' => $template]);
    }

    public function page5()
    {
        return view('Dashboard_User.pages5');
    }

    public function regular()
    {
        $my_microsite = microsite::where('id_user', Auth::user()->id)->orderByDesc('created_at')->paginate(5);
        $count_microsite = decrypt(User::find(Auth::user()->id)->jumlah_microsite);
        $limit_microsite = decrypt(User::find(Auth::user()->id)->batas_microsite);

        if($my_microsite){
            $transaksi = transaksi::where('status', 'PAID')->where('flag', 0)->get();
            $tambah = $transaksi->sum('slot');
            if($tambah > 0) {
                $user = User::find(Auth::user()->id);
                $batas = intval(decrypt($user->batas_microsite));
                $user->batas_microsite = encrypt($batas + $tambah);
                // $jumlah = intval(decrypt($limit_microsite));
                // $limit_microsite = encrypt($jumlah += $tambah);
                $user->save();
                
                foreach($transaksi as $trx) {
                    $trx->flag = 1;
                    $trx->save();
                }
            }
        }
        
        return view('Dashboard_User.regular')->with([
            'my_microsite' => $my_microsite,
            'count_microsite' => $count_microsite,
            'limit_microsite' => $limit_microsite
        ]);
    }

    public function langganan()
    {
        $data = paketModel::all();
        return view('Dashboard_User.langganan')->with('data', $data);
    }

    public function cekLinkUnik(Request $request)
    {
        $link = $request->input('link');

        // Cek apakah tautan sudah ada di database
        $microsite = microsite::where('link', $link)->first();

        if ($microsite) {
            // Jika tautan sudah ada, kembalikan pesan error
            return response()->json([
                'status' => 'error',
                'message' => 'Tautan sudah digunakan. Silakan gunakan tautan lain.',
            ]);
        } else {
            // Jika tautan belum ada, kembalikan pesan berhasil
            return response()->json([
                'status' => 'success',
                'message' => 'Tautan tersedia.',
            ]);
        }
    }


    public function nambah_microsite(Request $request)
    {
        $microsite = new microsite();
        $user = User::where('id', Auth::user()->id)->first();

        $template = template::findOrFail($request->id_template);

        $microsite->id_user = $user->id;
        $microsite->name = $request->name;
        $microsite->link = $request->link;
        $microsite->id_template = $request->id_template;
        $microsite->id_kategori = $request->id_kategori;
        $microsite->background = $template->background;
        $microsite->type_background = $template->type_background;
        $microsite->status = 'on';

        $microsite->save();

        $okk = explode(',', rtrim($template->id_komponen, ','));

        $konten_detail = '';

        foreach ($okk as $ok => $o) {
            $komponen = komponen::findOrFail(intval($o));

            $micro_detail = new microsite_detail();
            $micro_detail->id_komponen = $o;
            $micro_detail->id_template = $request->id_template;
            $micro_detail->id_microsite = $microsite->id;
            $micro_detail->order = ($ok + 1);
            $micro_detail->status = 'on';
            $micro_detail->code = $komponen->code;
            $micro_detail->title = $komponen->name;
            $micro_detail->icon = $komponen->icon;
            $micro_detail->code_input = $komponen->code_input;
            $micro_detail->value = 'test';

            $micro_detail->save();

            $micro_details = microsite_detail::findOrFail($micro_detail->id);

            if ($o === '9') {
                for ($i = 1; $i <= $template->value_konten_detail; $i++) {
                    $konten = new microsite_detail_konten();
                    $konten->id_microsite = $microsite->id;
                    $konten->id_microsite_detail = $micro_details->id;
                    $konten->value = 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4';
                    $konten->image = 'okk.jpg';
                    $konten->code = '<a href="https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4" class="konten-template"><img class="img-template" src="microsite/konten/okk.jpg" alt=""></a>';
                    $konten->code_input = '<input class="component-input-style" name="linkkonten[]" type="text" value="https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4" placeholder="Masukkan Tautan" /> <br>
                    <input class="component-input-style" name="imagekonten[]" type="file" /> <br>';
                    $konten->save();
                    $konten_detail = $konten_detail . strval($konten->id) . ',';
                }
                $micro_details->value = $konten_detail;
            } else {
                $micro_details->value = $komponen->value;
            }

            $micro_details->save();
        }

        $jumlah = intval(decrypt(User::find(Auth::user()->id)->jumlah_microsite));
        $user->jumlah_microsite = encrypt($jumlah += 1);
        $user->update();
        return response()->json([
            'message' => 'success',
            'data' => $microsite,
        ], 200);
    }

    public function edit_microsite()
    {
        $lastSegment = collect(request()->segments())->last();
        $microkon_kode = '';
        $microdet = microsite_detail::where('id_microsite', $lastSegment)->where('status', 'on')->orderBy('order', 'ASC')->get();
        $komponen = array();

        foreach ($microdet as $key => $row) {
            if($row->id_komponen === 9) {
                $microkon_kode = '';
                $microkon = microsite_detail_konten::where('id_microsite', $lastSegment)->get();
                foreach($microkon as $row) {
                    $microkon_kode .= $row->code;
                }
                $microkon_code = '<div class="bungkus-anak" id="bungkus-template-konten">' . $microkon_kode . '</div>';
                $komponen[$key]['id'] = 9;
                $komponen[$key]['code'] = $microkon_code;
            }
            else {
                $komponen[$key]['id'] = $row->id_komponen;
                $komponen[$key]['code'] = $row->code;
            }
        }

        $template = microsite::findOrFail($lastSegment);

        $penentu = microsite_detail::where('id_microsite', $lastSegment)->where('id_komponen', 11)->get();
        if ($penentu->count() > 0) {
            $tambah_komponen = komponen::whereNotIn('id', [11, 12])->get();
        } else {
            $tambah_komponen = komponen::where('id', '<>', 12)->get();
        }
        //button tambah komponen

        //value microsite
        $value_microsite = microsite_detail::where('id_microsite', $lastSegment)->where('status', 'on')->orderBy('id_komponen', 'ASC')->get();

        $titlemappingisi = microsite_detail::all();

        $titleMapping = $titlemappingisi->pluck('title')->unique()->values()->all();

        $value = array_fill(0, count($titleMapping), array());
        foreach ($value_microsite as $row) {
            $index = array_search($row->title, $titleMapping);
            $value[$index][] = $row->value;
        }

        //drag and drop
        $drag = microsite_detail::where('id_microsite', $lastSegment)->orderBy('order', 'ASC')->get();

        $dragss = [];

        foreach ($drag as $key => $row) {
            $dragss[$key]['status'] = $row->status;
            $dragss[$key]['icon'] = $row->icon;
            $dragss[$key]['id'] = $row->id;
            $dragss[$key]['order'] = $row->order;
            $dragss[$key]['id_komponen'] = $row->id_komponen;
            $dragss[$key]['title'] = $row->title;
            if($row->id_komponen === 9) {
                $microkon_kode = '';
                $microkon = microsite_detail_konten::where('id_microsite', $lastSegment)->get();
                foreach($microkon as $row1) {
                    $microkon_kode .= str_replace('class="component-input-style"', 'class="component-input-style" data-id_microkon="' . $row1->id . '"', $row1->code_input);
                    $microkon_kode .= '<label>Hapus Komponen</label><br><button class="hapusssss" data-id="'. $row1->id .'">Hapus</button>';
                }
                $dragss[$key]['code_input'] = $microkon_kode;
            }
            else {
                $dragss[$key]['code_input'] = $row->code_input;
            }
        }
        return view('Dashboard_User.pages5', ['value' => $value, 'data' => $komponen, 'background' => $template, 'drag' => $dragss, 'tambah_komponen' => $tambah_komponen]);
    }

    public function delete($id)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $item = microsite::findOrFail($id); //mencari data item dengan ID yang diberikan

        $item->delete(); //menghapus item
        $jumlah = intval(decrypt(User::find(Auth::user()->id)->jumlah_microsite));
        $user->jumlah_microsite = encrypt($jumlah -= 1);
        $user->update();
        return redirect()->back()->with('success', 'Data berhasil dihapus.'); //redirect kembali ke halaman sebelumnya dengan pesan sukses
    }

    public function tambah_slot_microsite($id) {
        $paket = paketModel::find($id);
        $secret_key = 'Basic '.config('xendit.key_auth');
        $external_id = Str::random(10);
        $data_request = Http::withHeaders([
            'Authorization' => $secret_key
        ])->post('https://api.xendit.co/v2/invoices', [
            'external_id' => $external_id,
            'amount' => $paket->harga
        ]);

        $response = $data_request->object();

        $user_id = User::find(Auth::user()->id);

        $transaksi = new transaksi();
        $transaksi->id_user = Auth::user()->id;
        $transaksi->external_id = $external_id;
        $transaksi->type = "microsite";
        $transaksi->total = $paket->harga;
        $transaksi->ref_id = $paket->id; 
        $transaksi->invoice_id = $response->id;
        $transaksi->slot = $paket->slot;
        $transaksi->url = $response->invoice_url;
        $transaksi->status = $response->status;
        $transaksi->save();
        $user_id->save();
        
        return redirect($response->invoice_url);
    }

    public function update_microsite($id_microsite, Request $request)
    {
        microsite_detail::where('id_microsite', $id_microsite)
            ->whereIn('id', $request->microdet)
            ->update(['order' => \DB::raw('FIELD(id, ' . implode(',', $request->microdet) . ')')]);


        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function update_status_microsite(Request $request)
    {
        $microsite_detail = microsite_detail::findOrFail($request->id);
        $microsite_detail->status = $request->status;
        $microsite_detail->save();

        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function hapus_komponen_microsite(Request $request)
    {
        $microsite_detail = microsite_detail::findOrFail($request->id);
        $microsite_detail->delete();

        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function tambah_komponen_microsite(Request $request)
    {
        $microdet = microsite_detail::where('id_microsite', $request->id_microsite)->get();
        $komponen = komponen::findOrFail($request->id);
        $microsite = microsite::findOrFail($request->id_microsite);

        $id_microdet = microsite_detail::where('id_microsite', $microsite->id)->where('id_komponen', 9)->first();

        if($id_microdet) 
        {
            if($komponen->id === 9)
            {
                $microkon = new microsite_detail_konten();
                $microkon->id_microsite = $microsite->id;
                $microkon->id_microsite_detail = $id_microdet->id;
                $microkon->value = 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4';
                $microkon->image = 'okk.jpg';
                $microkon->code = '<a href="https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4" class="konten-template"><img class="img-template" src="microsite/konten/okk.jpg" alt=""></a>';
                $microkon->code_input = '<label>Masukkan Tautan</label><br><input class="component-input-style" value="https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4" name="linkkonten[]" type="text" /> <br>
                <label>Masukkan Gambar</label><br><input class="component-input-style" name="imagekonten[]" type="file" /> <br>';
                $microkon->save();
    
                $micros = microsite_detail::findOrFail($id_microdet->id);
                $micros->value = $micros->value . $microkon->id . ',';
                $micros->save();
            } else {
                $new_microdet = new microsite_detail();
                $new_microdet->order = $microdet->max('order') + 1;
                $new_microdet->status = "on";
                $new_microdet->title = $komponen->name;
                $new_microdet->icon = $komponen->icon;
                $new_microdet->id_komponen = $komponen->id;
                $new_microdet->code_input = $komponen->code_input;
                $new_microdet->id_template = $microsite->id_template;
                $new_microdet->id_microsite = $microsite->id;
                $new_microdet->value = $komponen->value;
                $new_microdet->code = $komponen->code;
                $new_microdet->save();
            }
        }
        else
        {
            $new_microdet = new microsite_detail();
            $new_microdet->order = $microdet->max('order') + 1;
            $new_microdet->status = "on";
            $new_microdet->title = $komponen->name;
            $new_microdet->icon = $komponen->icon;
            $new_microdet->id_komponen = $komponen->id;
            $new_microdet->code_input = $komponen->code_input;
            $new_microdet->id_template = $microsite->id_template;
            $new_microdet->id_microsite = $microsite->id;
            $new_microdet->value = '';
            $new_microdet->code = $komponen->code;
            $new_microdet->save();

            $microkon = new microsite_detail_konten();
            $microkon->id_microsite = $microsite->id;
            $microkon->id_microsite_detail = $new_microdet->id;
            $microkon->value = 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4';
            $microkon->image = 'okk.jpg';
            $microkon->code = '<a href="https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4" class="konten-template"><img class="img-template" src="microsite/konten/okk.jpg" alt=""></a>';
            $microkon->code_input = '<input class="component-input-style" value="https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4" name="linkkonten[]" type="text" /> <br>
            <input class="component-input-style" name="imagekonten[]" type="file" /> <br>';
            $microkon->save();

            $newnew = microsite_detail::findOrFail($new_microdet->id);
            $newnew->value = $newnew->value . $microkon->id . ',';
            $newnew->save();
        }

        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function update_value_microsite(Request $request)
    {
        $microdet = microsite_detail::findOrFail($request->id);
        if ($request->name === 'instagram[]') {
            $input_array = explode(",", $microdet->value);
            $microdet->code = preg_replace('/\b' . preg_quote($input_array[0]) . '\b/i', $request->value, $microdet->code);
            $microdet->code_input = preg_replace('/\b' . preg_quote($input_array[0]) . '\b/i', $request->value, $microdet->code_input);
            $input_array[0] = $request->value; // mengganti elemen index ke-1 dengan nilai baru
            $new_string = implode(",", $input_array); // men
            $microdet->value = $new_string;
            $microdet->save();
        } elseif ($request->name === 'twitter[]') {
            $input_array = explode(",", $microdet->value);
            $microdet->code = preg_replace('/\b' . preg_quote($input_array[1]) . '\b/i', $request->value, $microdet->code);
            $microdet->code_input = preg_replace('/\b' . preg_quote($input_array[1]) . '\b/i', $request->value, $microdet->code_input);
            $input_array[1] = $request->value; // mengganti elemen index ke-1 dengan nilai baru
            $new_string = implode(",", $input_array); // men
            $microdet->value = $new_string;
            $microdet->save();
        } elseif ($request->name === 'facebook[]') {
            $input_array = explode(",", $microdet->value);
            $microdet->code = preg_replace('/\b' . preg_quote($input_array[2]) . '\b/i', $request->value, $microdet->code);
            $microdet->code_input = preg_replace('/\b' . preg_quote($input_array[2]) . '\b/i', $request->value, $microdet->code_input);
            $input_array[2] = $request->value; // mengganti elemen index ke-1 dengan nilai baru
            $new_string = implode(",", $input_array); // men
            $microdet->value = $new_string;
            $microdet->save();
        } elseif ($request->name === 'youtube[]') {
            $input_array = explode(",", $microdet->value);
            $microdet->code = preg_replace('/\b' . preg_quote($input_array[3]) . '\b/i', $request->value, $microdet->code);
            $microdet->code_input = preg_replace('/\b' . preg_quote($input_array[3]) . '\b/i', $request->value, $microdet->code_input);
            $input_array[3] = $request->value; // mengganti elemen index ke-1 dengan nilai baru
            $new_string = implode(",", $input_array); // men
            $microdet->value = $new_string;
            $microdet->save();
        } elseif ($request->name === 'tiktok[]') {
            $input_array = explode(",", $microdet->value);
            $microdet->code = preg_replace('/\b' . preg_quote($input_array[4]) . '\b/i', $request->value, $microdet->code);
            $microdet->code_input = preg_replace('/\b' . preg_quote($input_array[4]) . '\b/i', $request->value, $microdet->code_input);
            $input_array[4] = $request->value; // mengganti elemen index ke-1 dengan nilai baru
            $new_string = implode(",", $input_array); // men
            $microdet->value = $new_string;
            $microdet->save();
        } elseif ($request->name === 'link[]') {
            $url = $request->input('value'); // URL Youtube yang ingin diparsing
            $url_parts = parse_url($url); // Mem-parse URL menjadi komponen-komponennya
            parse_str($url_parts['query'], $query); // Mem-parse query string menjadi variabel PHP

            $video_id = isset($query['v']) ? $query['v'] : null; // Mendapatkan nilai parameter 'v' jika ada
            if ($video_id) {
                $video_parts = explode('/', $video_id);
                $last_part = end($video_parts);
                $microdet->code = preg_replace('/\b' . preg_quote($microdet->value) . '\b/i', $last_part, $microdet->code);
                $microdet->code_input = preg_replace('/\b' . preg_quote($microdet->value) . '\b/i', $last_part, $microdet->code_input);
                $microdet->value = $last_part;
                $microdet->save();
            } else {
                // Jika tidak ditemukan parameter 'v', maka mengembalikan null
                dd("oke");
            }
        } else {
            $microdet->code = preg_replace('/\b' . preg_quote($microdet->value) . '\b/i', $request->value, $microdet->code);
            $microdet->code_input = preg_replace('/\b' . preg_quote($microdet->value) . '\b/i', $request->value, $microdet->code_input);
            $microdet->value = $request->value;
            $microdet->save();
        }

        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function update_image_microsite(Request $request)
    {
        $microdet = microsite_detail::findOrFail($request->id);
        $filenm = Carbon::now()->timestamp . '.' . $request->file->extension();
        $request->file->storeAs('microsite/icon/', $filenm);

        $microdet->code = preg_replace('/\b' . preg_quote($microdet->value) . '\b/i', $filenm, $microdet->code);
        $microdet->code_input = preg_replace('/\b' . preg_quote($microdet->value) . '\b/i', $filenm, $microdet->code_input);

        $microdet->value = $filenm;
        $microdet->save();

        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function update_background_microsite(Request $request)
    {
        $microsite = microsite::findOrFail($request->id);

        if ($request->hasFile('background')) {
            // Mengambil file dari permintaan
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

    public function update_konten_microsite(Request $request)
    {
        $microsite = microsite_detail_konten::findOrFail($request->id_microkon);

        if ($request->hasFile('konten')) {

            $file = $request->file('konten');

            $filenm = Carbon::now()->timestamp . '.' . $file->extension();
            $file->storeAs('microsite/konten/', $filenm);
            $microsite->code = preg_replace('/\b' . preg_quote($microsite->image) . '\b/i', $filenm, $microsite->code);
            $microsite->code_input = preg_replace('/\b' . preg_quote($microsite->image) . '\b/i', $filenm, $microsite->code_input);

            $microsite->image = $filenm;
        } else {

            $microsite->code = preg_replace('~\b' . preg_quote($microsite->value) . '\b~i', $request->konten, $microsite->code);
            $microsite->code_input = preg_replace('~\b' . preg_quote($microsite->value) . '\b~i', $request->konten, $microsite->code_input);

            $microsite->value = $request->konten;
        }

        $microsite->save();

        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function shortlinks() {
        // Mendapatkan pengguna yang sudah login
        $user = Auth::user();
    
        // Memeriksa apakah pengguna ada
        if ($user) {
            // Mendapatkan ID pengguna yang sudah login
            $userId = $user->id;
    
            // Mengambil shortlink milik pengguna tersebut berdasarkan ID pengguna
            $data = Shortlink::where('id_user', $userId)->latest()->take(10)->paginate(10);
            $count = shortlink::where('id_user', $userId)->count();
    
            return view('Dashboard_User.short_link')->with([
                'data' => $data,
                'count' => $count,
            ]);
        } else {
            // Jika pengguna belum login, tampilkan pesan atau tindakan lain sesuai kebutuhan Anda
            return view('auth.login');
        }
    }

    public function shortlinks_create() {
        return view('Dashboard_User.shortlinks_create');
    }

    public function shortlinks_edit($id) {
        $data = shortlink::find($id);
        return view('Dashboard_User.shortlinks_edit')->with('data', $data);
    }

    public function shortlinks_update(Request $request) {
        $data = shortlink::find($request->id_shortlink);
        $data->link = $request->link_shortlink;
        $data->update();
        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function shortlinks_delete($id) {
        $data = shortlink::find($id);
        $data->delete();
        $user=Auth::user();
        $links = Shortlink::where('id_user', $user->id)
                    ->orderBy('created_at')
                    ->limit($user->shortlink_count - 10)
                    ->get();

                // Mengubah status pada link-link tersebut menjadi "off"
                foreach ($links as $link) { 
                    $link->status = 'on';
                    $link->save();
                }
        return redirect()->back();
    }

    public function testing() {
        $check = User::find(Auth::user()->id);
        $link = microsite::where('id_user', Auth::user()->id)->pluck('link');
        $all_count = 0;
        if(empty($check->all_visitor_total)){
            $check->all_visitor_total = "0,0,0,0,0,0,0,0,0,0,0,0," . date('Y');
            $check->update();
            dd('update!');
        }else{
            foreach($link as $l){
                $count = visitorModel::where('id_microsite', $l)->count();
                $all_count += $count;
            }
            $str = $check->all_visitor_total;
            $update_count = substr_replace($str, strval($all_count), ((date('n') - 1) * 2), 1);
            $check->all_visitor_total = $update_count;
            $check->update();
            dd('done!');
        }


        // $find_id_microsite = microsite::where('id_user', Auth::user()->id)->pluck('link');
        // $test = visitortotalModel::all();
        // foreach($find_id_microsite as $find){
        //     if ($test->contains('id_microsite', $find)) {
        //         $count = visitorModel::where('id_microsite', $find)->count();
        //         $update_chart = visitortotalModel::where('id_microsite', $find)->first(); // ambil 1 data
        //         $abc = $update_chart->total_visitor;
        //         $newStr = substr_replace($abc, strval($count), ((date('n') - 1) * 2), 1);
        //         $update_chart->total_visitor = $newStr;
        //         $update_chart->update();
        //         echo "Link " . $find . " ada di database" . $newStr;
        //     } else {
        //         $new = new visitortotalModel();
        //         $new->total_visitor = "0,0,0,0,0,0,0,0,0,0,0,0," . date('Y');
        //         $new->id_microsite = $find;
        //         $new->save();
        //         echo "Link " . $find . " tidak ada di database";
        //     }
        // }
        // dd('testing');


        //untuk tambah data grafik di dashboard user
        // $tahunIni = date('Y');
        // $dataPerBulan = [];
        
        // for ($bulan = 1; $bulan <= 12; $bulan++) {
        //     $data = visitorModel::whereYear('date', $tahunIni)
        //                         ->whereMonth('date', $bulan)
        //                         ->get()
        //                         ->toArray();
                        
        //     $count = count($data);
        //     $dataPerBulan[] = $count;
        // }
        
        // $dataString = implode(',', $dataPerBulan);
        // $dataString .= ',' . $tahunIni;
        // $visitor = new visitortotalModel();
        // $visitor->id_microsite = "testing";
        // $visitor->total_visitor = $dataString;
        // $visitor->save();
        // dd($dataString);
    }

    public function microsite_screenshot_cover(Request $request)
    {
        $microsite = microsite::findOrFail($request->id);

        $file = $request->file('screenshot');

        $filenm = Carbon::now()->timestamp . '.' . $file->extension();
        $file->storeAs('microsite/cover/', $filenm);

        $microsite->cover = $filenm;
        $microsite->save();

        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function preview_template(Request $request)
    {

        $lastSegment = $request->id;
        $template = template::findOrFail(intval($lastSegment));
        $array = explode(',', rtrim($template->id_komponen, ','));
        
        $komponen_array = array();
        
        foreach ($array as $key => $row) {
            if ($row === '9') {
                $komponen = komponen::findOrFail(12);
                $microkon_kode = '';
                for ($i = 1; $i <= $template->value_konten_detail; $i++) {
                    $microkon_kode .= $komponen->code;
                }
                $microkon_code = '<div class="bungkus-anak" id="bungkus-template-konten">' . $microkon_kode . '</div>';
                $komponen_array[$key]['id'] = 9;
                $komponen_array[$key]['code'] = $microkon_code;
            } else {
                $komponen = komponen::findOrFail(intval($row));
                $komponen_array[$key]['id'] = $komponen->id;
                $komponen_array[$key]['code'] = $komponen->code;
            }
        }
        
        

        $template = template::findOrFail($request->id);
        
        return response()->json([
            'message' => 'success',
            'data' => $komponen_array,
            'background' => $template,
        ], 200);
    }

    public function hapus_konten_anak_microsite(Request $request) 
    {
        $microkon = microsite_detail_konten::findOrFail($request->id_microkon);
        $microkon->delete();

        $id = strval($microkon->id) . ',';
        $microdet = microsite_detail::findOrFail($microkon->id_microsite_detail);
        $microdet->value = str_replace($id, "", $microdet->value);
        $microdet->save();

        return response()->json([
            'message' => 'success',
        ], 200);
    }
}
