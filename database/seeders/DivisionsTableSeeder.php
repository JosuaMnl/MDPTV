<?php

namespace Database\Seeders;

use App\Models\Divisions;
use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Divisions::create(
            ["nama_divisi"=>"Creator"]
        );
        
        Divisions::create(
            ["nama_divisi"=>"Media Komunikasi"]
        );

        Divisions::create(
            ["nama_divisi"=>"Edit Gambar"]
        );

        Divisions::create(
            ["nama_divisi"=>"Edit Video"]
        );
    }
}
