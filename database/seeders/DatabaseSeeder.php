<?php

namespace Database\Seeders;

use App\Models\Documentation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Documentation::create(
            ["nama_kegiatan"=>"Test Kegiatan",
                "tanggal_kegiatan"=>"2022-06-01",
                "lokasi"=>"Test Lokasi",
                "keterangan" => "Test Keterangan",
                "link_dokumentasi"=>"Test Link Dokumentasi",
                "periods_id"=>3,
                "organizers_id"=>3
            ]
        );
    }
}
