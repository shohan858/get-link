<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\getlink;
use App\Models\getlink_image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('getlink')->insert(
            [
                "title" => "Agar lebih enak,ringkas dilihat pilih GetLink",
                "subtitle" => "Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting",
            ], 
        );

        DB::table('getlink_image')->insert([
            "image1" => "1678066641.jpg",
            "image2" => "1678066641.jpg",
            "image3" => "1678066641.jpg",
            "image4" => "1678066641.jpg",
            "image5" => "1678066641.jpg",
        ]);

        DB::table('collab')->insert([
            "image" => "1678066641.jpg",
        ]);
        
        DB::table("getlink")->insert([
            "title" => "Short Link.",
            "subtitle" => "Memendekkan link yang panjang agar mudah di akses",
            "image" => "1678066641.jpg",
        ]);
        
        DB::table("getlink")->insert([
            "title" => "Gratis Semua Pengguna",
            "subtitle" => "Memendekkan link yang panjang agar mudah di akses",
        ]);
        
        DB::table("getlink")->insert([
            "title" => "Gratis Semua Pengguna ",
            "subtitle" => "Memendekkan link yang panjang agar mudah di akses",
        ]);
        
        DB::table("getlink")->insert([
            "title" => "Content Managament System.",
            "subtitle" => "Buat landing page anda tanpa perlu ngoding",
        ]);

        DB::table("getlink")->insert([
            "title" => "Penggunaan yang mudah",
        ]);
        DB::table("getlink")->insert([
            "title" => "Desain yang responsive",
        ]);
        DB::table("getlink")->insert([
            "title" => "Banyak pilihan template",
        ]);



        DB::table("getlink")->insert([
            "title" => "Mudah Digunakan",
            "subtitle" => "Tanpa perlu skill coding sedikitpun untuk membuat website dan microsite anda.",
        ]);
        
        DB::table("getlink")->insert([
            "title" => "10.000+ Pengguna",
            "subtitle" => "Lebih dari 10.000 pengguna dari segala penjuru dunia.",
        ]);

        DB::table("getlink")->insert([
            "title" => "Tanpa Batas",
            "subtitle" => "Tidak ada batasan apapun untuk link anda.",
        ]);

        DB::table("getlink")->insert([
            "title" => "1M+ Links Shorten",
            "subtitle" => "Jutaan link telah dipendekkan.",
        ]);

        DB::table("getlink")->insert([
            "title" => "Cepat",
            "subtitle" => "Kecepatan dalam membangun dan mengakses link maupun wesbite anda.",
        ]);

        DB::table("getlink")->insert([
            "title" => "Manajemen Link",
            "subtitle" => "Sangat mudah dan praktis dalam memanajemen dan mengakses seluruh link anda.",
        ]);


    }
}
