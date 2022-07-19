<?php

namespace Database\Seeders;

use App\Models\Periods;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Periods::create(
            ["tahun_akademik"=>"2022/2023"
            ]
        );
    }
}
