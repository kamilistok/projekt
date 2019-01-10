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
            $page->ZIPcode = $faker->randomNumber($nbDigits = NULL, $strict = false);
            $page->name = $faker->firstNameMale;
            $page->lastName = $faker->lastName;
            $page->city = $faker->city;
            $page->street = $faker->streetName;
            $page->buildingNumber = $faker->buildingNumber;
            $page->phoneNumber = $faker->phoneNumber;
            $page->save();
        }
    }
}
