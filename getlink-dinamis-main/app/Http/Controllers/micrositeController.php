<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use App\Models\microsite;
use App\Models\microsite_template_model;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class micrositeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $microsite = microsite::all();
        return response()->json([
            'message' => 'success',
            'data' => $microsite,
        ], 200);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $microsite = new microsite();
        // $user = User::find($request->id_user);
        // if ($user->jumlah_microsite == 3) {
        //     if ($user->status == 'reguler') {
        //         return response()->json([
        //             'message' => 'Kamu belum berlangganan'
        //         ], 200);
        //     } else if ($user->status == 'langganan') {
        //         $microsite->id_user = $request->id_user;
        //         $microsite->title = $request->title;
        //         $microsite->bio = $request->bio;
        //         $microsite->instagram = $request->instagram;
        //         $microsite->twitter = $request->twitter;
        //         $microsite->facebook = $request->facebook;
        //         $microsite->youtube = $request->youtube;
        //         $microsite->tiktok = $request->tiktok;

        //         $file = $request->file('icon');
        //         $microsite->icon = time() . '.' . $file->getClientOriginalExtension();
        //         $filePath = $file->storeAs('uploads', $microsite->icon, 'public');

        //         $file->move(public_path('uploads'), $microsite->icon);

        //         $microsite->save();
        //         $user->jumlah_microsite += 1;
        //         $user->save();
        //         return response()->json([
        //             'message' => 'success',
        //             'data' => $microsite,
        //         ], 200);
        //     }
        // }

        // $microsite->id_user = $request->id_user;
        // $microsite->title = $request->title;
        // $microsite->bio = $request->bio;
        // $microsite->instagram = $request->instagram;
        // $microsite->twitter = $request->twitter;
        // $microsite->facebook = $request->facebook;
        // $microsite->youtube = $request->youtube;
        // $microsite->tiktok = $request->tiktok;

        // $file = $request->file('icon');
        // $microsite->icon = time() . '.' . $file->getClientOriginalExtension();
        // $filePath = $file->storeAs('uploads', $microsite->icon, 'public');

        // $file->move(public_path('uploads'), $microsite->icon);

        // $microsite->save();
        // $user->jumlah_microsite += 1;
        // $user->save();
        // return response()->json([
        //     'message' => 'success',
        //     'data' => $microsite,
        // ], 200);
        $microsite = new microsite();
        $user = User::where('id',$request->id_user)->first();
        $batas = $user->batas_microsite;
        if ($user->jumlah_microsite == $batas) {
            if ($user->status == 'reguler') {
                return response()->json([
                    'message' => 'Kamu belum berlangganan'
                ], 200);
            } else if (($user->status == 'langganan') && ($user->jumlah_microsite < $batas)) {
                $microsite->id_user = $request->id_user;
                $microsite->title = $request->title;
                $microsite->link = $request->link;
                $microsite->id_template = $request->id_template;
                $microsite->save();
                $user->jumlah_microsite += 1;
                $user->save();
                return response()->json([
                    'message' => 'success',
                    'data' => $microsite,
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Kamu belum berlangganan'
                ], 200);
            }
        }

        $microsite->id_user = $request->id_user;
        $microsite->title = $request->title;
        $microsite->link = $request->link;
        $microsite->id_template = $request->id_template;

        $microsite->save();
        $user->jumlah_microsite += 1;
        $user->save();
        return response()->json([
            'message' => 'success',
            'data' => $microsite,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $microsite = microsite::find($id);

        if (!$microsite) {
            return response()->json([
                'message' => 'not found',
            ], 404);
        }
        $microsite->link = $request->link;
        $microsite->icon = $request->icon;
        $microsite->title = $request->title;
        $microsite->bio = $request->bio;
        $microsite->instagram = $request->instagram;
        $microsite->twitter = $request->twitter;
        $microsite->facebook = $request->facebook;
        $microsite->youtube = $request->youtube;
        $microsite->tiktok = $request->tiktok;
        $microsite->id_template = $request->id_template;

        $microsite->update();
        return response()->json([
            'message' => 'success',
            'data' => $microsite,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json([
                'message' => 'not found',
            ], 404);
        }
        $user->delete();
        return response()->json([
            'message' => 'success',
        ], 200);
    }
}
