<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User_levels;

class User_levelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User_levels::create(
            ["user_levels"=> "MDP TV"]
        );

        User_levels::create(
            ["user_levels"=> "Multimedia"]
        );

        User_levels::create(
            ["user_levels"=> "Mitra"]
        );
    }
}
