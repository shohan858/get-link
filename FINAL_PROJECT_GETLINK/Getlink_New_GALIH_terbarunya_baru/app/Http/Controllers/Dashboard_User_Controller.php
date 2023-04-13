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
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class Dashboard_User_Controller extends Controller
{
    public $id_kategori;
    public function dashboard()
    {
        return view('Dashboard_User.dashboard');
    }

    public function buat_tautan()
    {
        return view('Dashboard_User.buat_tautan');
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
        $template = template::findOrFail($lastSegment);
        $array = explode(",", $template->id_komponen);

        $komponen = array();
        foreach ($array as $key => $row) {
            $komponens = komponen::find($row);
            $komponen[$key]['id'] = $komponens->id;
            $komponen[$key]['code'] = $komponens->code;
        }

        return view('Dashboard_User.pages4', ['komponen' => $komponen, 'background' => $template]);
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

        if ($my_microsite) {
            $transaksi = transaksi::where('status', 'PAID')->where('flag', 0)->get();
            $tambah = $transaksi->sum('slot');
            if ($tambah > 0) {
                $user = User::find(Auth::user()->id);
                $batas = intval(decrypt($user->batas_microsite));
                $user->batas_microsite = encrypt($batas += $tambah);
                $jumlah = intval(decrypt($limit_microsite));
                $limit_microsite = encrypt($jumlah += $tambah);
                $user->save();

                foreach ($transaksi as $trx) {
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

        $okk = explode(',', $template->id_komponen);

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
                    $konten->code_input = '<input class="component-input-style" name="linkkonten[]" type="text" /> <br>
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
        if ($penentu) {
            $tambah_komponen = komponen::where('id', '<>', 11)->get();
        } else {
            $tambah_komponen = komponen::all();
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
            $dragss[$key]['id'] = $row->id;
            $dragss[$key]['order'] = $row->order;
            $dragss[$key]['id_komponen'] = $row->id_komponen;
            $dragss[$key]['title'] = $row->title;
            if($row->id_komponen === 9) {
                $microkon_kode = '';
                $microkon = microsite_detail_konten::where('id_microsite', $lastSegment)->get();
                foreach($microkon as $row1) {
                    $microkon_kode .= str_replace('class="component-input-style"', 'class="component-input-style" data-id_microkon="' . $row1->id . '"', $row1->code_input);
                    $microkon_kode .= '<button class="hapusssss" data-id="'. $row1->id .'">Hapus</button>';
                }
                $dragss[$key]['code_input'] = $microkon_kode;
            }
            else {
                $dragss[$key]['code_input'] = $row->code_input;
            }
        }
        return view('Dashboard_user.pages5', ['value' => $value, 'data' => $komponen, 'background' => $template, 'drag' => $dragss, 'tambah_komponen' => $tambah_komponen]);
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

    public function tambah_slot_microsite($id)
    {
        $paket = paketModel::find($id);
        $secret_key = 'Basic ' . config('xendit.key_auth');
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
                $microkon->code_input = '<input class="component-input-style" name="linkkonten[]" type="text" /> <br>
                <input class="component-input-style" name="imagekonten[]" type="file" /> <br>';
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
            $input_array[0] = $request->value; // mengganti elemen index ke-1 dengan nilai baru
            $new_string = implode(",", $input_array); // men
            $microdet->value = $new_string;
            $microdet->save();
        } elseif ($request->name === 'twitter[]') {
            $input_array = explode(",", $microdet->value);
            $microdet->code = preg_replace('/\b' . preg_quote($input_array[1]) . '\b/i', $request->value, $microdet->code);
            $input_array[1] = $request->value; // mengganti elemen index ke-1 dengan nilai baru
            $new_string = implode(",", $input_array); // men
            $microdet->value = $new_string;
            $microdet->save();
        } elseif ($request->name === 'facebook[]') {
            $input_array = explode(",", $microdet->value);
            $microdet->code = preg_replace('/\b' . preg_quote($input_array[2]) . '\b/i', $request->value, $microdet->code);
            $input_array[2] = $request->value; // mengganti elemen index ke-1 dengan nilai baru
            $new_string = implode(",", $input_array); // men
            $microdet->value = $new_string;
            $microdet->save();
        } elseif ($request->name === 'youtube[]') {
            $input_array = explode(",", $microdet->value);
            $microdet->code = preg_replace('/\b' . preg_quote($input_array[3]) . '\b/i', $request->value, $microdet->code);
            $input_array[3] = $request->value; // mengganti elemen index ke-1 dengan nilai baru
            $new_string = implode(",", $input_array); // men
            $microdet->value = $new_string;
            $microdet->save();
        } elseif ($request->name === 'tiktok[]') {
            $input_array = explode(",", $microdet->value);
            $microdet->code = preg_replace('/\b' . preg_quote($input_array[4]) . '\b/i', $request->value, $microdet->code);
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
                $microdet->value = $last_part;
                $microdet->save();
            } else {
                // Jika tidak ditemukan parameter 'v', maka mengembalikan null
                dd("oke");
            }
        } else {
            $microdet->code = preg_replace('/\b' . preg_quote($microdet->value) . '\b/i', $request->value, $microdet->code);
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

            $microsite->image = $filenm;
        } else {

            $microsite->code = preg_replace('~\b' . preg_quote($microsite->value) . '\b~i', $request->konten, $microsite->code);

            $microsite->value = $request->konten;
        }

        $microsite->save();

        return response()->json([
            'message' => 'success',
        ], 200);
    
    }

    public function shortlinks()
    {
        $check = User::find(Auth::user()->id);
        if ($check->batas_microsite > 3) {
            $data = shortlink::all();
        } else {
            $data = shortlink::latest()->take(10)->get();
        }
        return view('dashboard_user.short_link')->with('data', $data);
    }

    public function shortlinks_create()
    {
        return view('dashboard_user.shortlinks_create');
    }

    public function shortlinks_edit($id)
    {
        $data = shortlink::find($id);
        return view('dashboard_user.shortlinks_edit')->with('data', $data);
    }

    public function shortlinks_update(Request $requests, $id)
    {
        $data = shortlink::find($id);
        $data->link = $requests->link;
        $data->update();
        return redirect()->back();
    }

    public function shortlinks_delete($id)
    {
        $data = shortlink::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function testing()
    {
        $userAgent = request()->server('HTTP_USER_AGENT');

        $test3 = new visitorModel();
        $browser_name = ['Chrome', 'Edg', 'Firefox'];

        foreach ($browser_name as $browser) {
            $abcde = visitorModel::where('id_microsite', 75)
                ->where('ip_address', request()->ip())
                ->where('date', now()->toDateString())
                ->where('browser', $browser)
                ->get();

            print_r($browser);

            if ($abcde->isEmpty()) {
                if (stripos($userAgent, 'firefox') !== false) {
                    $test3->browser = 'firefox';
                } elseif (stripos($userAgent, 'Edg') !== false) {
                    $test3->browser = 'Edg';
                } elseif (stripos($userAgent, 'Chrome') !== false) {
                    $test3->browser = 'Chrome';
                } else {
                    $test3->browser = 'other';
                }
                $test3->id_microsite = 75;
                $test3->ip_address = request()->ip();
                $test3->date = date('Y-m-d');
                $test3->save();
                break;
            }
        }

        if ($abcde->isEmpty()) {
            if (stripos($userAgent, 'firefox') !== false) {
                $test3->browser = 'firefox';
            } elseif (stripos($userAgent, 'Edg') !== false) {
                $test3->browser = 'Edg';
            } elseif (stripos($userAgent, 'Chrome') !== false) {
                $test3->browser = 'Chrome';
            } else {
                $test3->browser = 'other';
            }
            $test3->id_microsite = 75;
            $test3->ip_address = request()->ip();
            $test3->date = date('Y-m-d');
            $test3->save();
        }

        // print_r($userAgent . "<br>" . $abcde->browser);
        foreach ($abcde as $ab) {
            if ((!strpos($userAgent, $ab->browser)) || (!strpos($userAgent, 'Chrome'))) {
                if (stripos($userAgent, 'firefox') !== false) {
                    $test3->browser = 'firefox';
                } elseif (stripos($userAgent, 'Edg') !== false) {
                    $test3->browser = 'Edg';
                } elseif (stripos($userAgent, 'Chrome') !== false) {
                    $test3->browser = 'Chrome';
                } else {
                    $test3->browser = 'other';
                }
                print_r($ab->browser . "    " . $userAgent . "<br>" . (!strpos($userAgent, 'Chrome' . $ab->browser)));
                $test3->id_microsite = 75;
                $test3->ip_address = request()->ip();
                $test3->date = date('Y-m-d');
                $test3->save();
                dd('sudah bikin baru!');
            } else {
                print_r($ab->browser . "    " . $userAgent . "<br>");
                dd(strpos($userAgent, $ab->browser));
                dd('anda sudah visitor');
            }
        }

        return response()->json([
            'message' => 'success',
        ], 200);
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
        $template = template::findOrFail($request->id);

        $array = explode(",", $template->id_komponen);

        $komponen = array();
        foreach ($array as $key => $row) {
            $komponens = komponen::find($row);
            $komponen[$key]['id'] = $komponens->id;
            $komponen[$key]['code'] = $komponens->code;
        }

        $value = array();
        foreach ($array as $key => $row) {
            $values = komponen::find($row);
            $value[$key]['value'] = $values->code;
        }


        return response()->json([
            'message' => 'success',
            'data' => $komponen,
            'background' => $template,
            'value' => $value
        ], 200);
    }

    
    public function hapus_konten_anak_microsite(Request $request) 
    {
        $microkon = microsite_detail_konten::findOrFail($request->id_microkon);
        $microkon->delete();

        $id = strval($microkon->id) . ',';
        $microdet = microsite_detail::findOrFail($microkon->id_microsite_detail);
        $microdet->name = str_replace($id, "", $microdet->value);
        $microdet->save();

        return response()->json([
            'message' => 'success',
        ], 200);
    }
}
