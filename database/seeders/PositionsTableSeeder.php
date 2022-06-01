<?php

namespace Database\Seeders;

use App\Models\Positions;
use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Positions::create(
            ["nama_jabatan"=>"Ketua"]
        );

        Positions::create(
            ["nama_jabatan"=>"Wakil Ketua"]
        );

        Positions::create(
            ["nama_jabatan"=>"Sekretaris 1"]
        );

        Positions::create(
            ["nama_jabatan"=>"Sekretaris 2"]
        );

        Positions::create(
            ["nama_jabatan"=>"Bendahara"]
        );

        Positions::create(
            ["nama_jabatan"=>"Ketua Divisi"]
        );

        Positions::create(
            ["nama_jabatan"=>"Anggota"]
        );
    }
}
