<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cooperations;

class CooperationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cooperations::create(
                ["nama_kegiatan"=>"Test Kegiatan",
                "tanggal_kegiatan"=>"2022-06-01",
                "no_hp"=> "0813123456789",
                "lokasi"=>"Test Lokasi",
                "surat_izin"=> "ABC",
                "surat_kerjasama"=> "ABC",
                "organizers_id"=>3,
                "users_id"=>1
            ]
        );
    }
}
