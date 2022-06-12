<?php

namespace Database\Seeders;

use App\Models\Service_categories;
use Illuminate\Database\Seeder;

class Service_categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Service_categories::create(
            ["nama_layanan" => "Dokumentasi"]
        );

        Service_categories::create(
            ["nama_layanan" => "Operator Live Streaming"]
        );

        Service_categories::create(
            ["nama_layanan" => "Desain"]
        );
    }
}
