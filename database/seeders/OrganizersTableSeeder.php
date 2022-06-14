<?php

namespace Database\Seeders;

use App\Models\Organizers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Organizers::create(
            ["penyelenggara"=>"UMDP"]
        );

        Organizers::create(
            ["penyelenggara"=>"SENAT"]
        );

        Organizers::create(
            ["penyelenggara"=>"HIMSI"]
        );

        Organizers::create(
            ["penyelenggara"=>"HIMIF"]
        );

        Organizers::create(
            ["penyelenggara"=>"HIMAKSI"]
        );

        Organizers::create(
            ["penyelenggara"=>"HIMMI"]
        );

        Organizers::create(
            ["penyelenggara"=>"MANCOM"]
        );

        Organizers::create(
            ["penyelenggara"=>"UKM Futsal"]
        );

        Organizers::create(
            ["penyelenggara"=>"UKM Permadhis"]
        );

        Organizers::create(
            ["penyelenggara"=>"UKM Badminton"]
        );

        Organizers::create(
            ["penyelenggara"=>"UKM Basket"]
        );

        Organizers::create(
            ["penyelenggara"=>"KOSMA"]
        );
    }
}
