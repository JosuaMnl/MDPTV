<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Members;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
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
