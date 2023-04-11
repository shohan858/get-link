<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('kategoris')->insert([
            ["name" => "Personal Branding", "color" => "#00678b", "icon" => "b.png"],
            ["name" => "Komunitas", "color" => "#800ea0", "icon" => "komunitas.png"],
            ["name" => "Marketing", "color" => "#ca2fb8", "icon" => "marketing.png"],
            ["name" => "UMKM", "color" => "#d1c323", "icon" => "c.png"],
            ["name" => "Curriculum Vitae", "color" => "#3743e1", "icon" => "cv.png"],
        ]);
        DB::table('templates')->insert([
            ["id_kategori" => "1", "id_komponen" => "1", "image" => "basic.png", "title" => "Basic"],
            ["id_kategori" => "2", "id_komponen" => "1", "image" => "gamer.png", "title" => "Gamer"],
            ["id_kategori" => "3", "id_komponen" => "1", "image" => "namecard.png", "title" => "Name Card"],
            ["id_kategori" => "4", "id_komponen" => "1", "image" => "partai.png", "title" => "Partai"],
            ["id_kategori" => "5", "id_komponen" => "1", "image" => "portofolio.png", "title" => "Portofolio"],
        ]);
    }
}
