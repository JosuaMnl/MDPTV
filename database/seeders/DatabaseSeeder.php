<?php

namespace Database\Seeders;

use App\Models\Members;
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
        Members::create(
            ["nama"=>"Muhammad Irfan",
                "email"=>"test@example.com",
                "no_hp"=>"0831212312313",
                "alamat"=>"Jalan Alam",
                "jenis_kelamin"=>"L",
                "angkatan"=>1,
                "status"=>"aktif",
                "study_programs_id"=>1,
                "divisions_id"=>1,
                "positions_id"=>6
            ]
        );
    }
}
