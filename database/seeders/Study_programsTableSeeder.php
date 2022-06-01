<?php

namespace Database\Seeders;

use App\Models\Study_programs;
use Illuminate\Database\Seeder;

class Study_programsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Study_programs::create(
            ["nama_prodi"=>"Sistem Informasi"]
        );

        Study_programs::create(
            ["nama_prodi"=>"Informatika"]
        );

        Study_programs::create(
            ["nama_prodi"=>"Manajemen Informatika"]
        );

        Study_programs::create(
            ["nama_prodi"=>"Teknik Elektro"]
        );

        Study_programs::create(
            ["nama_prodi"=>"Akuntansi"]
        );

        Study_programs::create(
            ["nama_prodi"=>"Manajemen"]
        );
    }
}
