<?php

use App\Models\HolidayPackage;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class HolidayPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 5; $i++){
            $newHolidayPackage = new HolidayPackage();
            $newHolidayPackage->destination = $faker->words(3, true);
            $newHolidayPackage->number_of_adults = $faker->numberBetween(1, 16);
            $newHolidayPackage->number_of_children = $faker->numberBetween(0, 16);
            $newHolidayPackage->departure_date = $faker->date('Y-m-d');
            $newHolidayPackage->return_date = $faker->date('Y-m-d');
            $newHolidayPackage->save();
        }
    }
}
