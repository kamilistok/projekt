<?php

use Illuminate\Database\Seeder;
use App\Pages;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 30; $i++) {
            $page = new Pages();
            $page->idnumber = $faker->randomNumber($nbDigits = NULL, $strict = false);
            $page->name = $faker->name;
            $page->lastname = $faker->lastName;
            $page->city = $faker->city;
            $page->street = $faker->streetName;
            $page->housenumber = $faker->buildingNumber;
            $page->ZIPcode = $faker->randomNumber($nbDigits = NULL, $strict = false);
            $page->phonenumber = $faker->phoneNumber;
            $page->save();
        }
    }
}
