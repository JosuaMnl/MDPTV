<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Marcelo Amazona',
            'user_levels_id' => '1',
            'email' => 'amazonamarcelo@mhs.mdp.ac.id',
            'password' => Hash::make('12345678')
        ]);
    }
}
