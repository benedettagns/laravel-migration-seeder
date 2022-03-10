<?php

use App\Holiday;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {

        for($i = 0; $i <10; $i++) {

            $holiday = new Holiday();
            $holiday->partenza= $faker->city();
            $holiday->arrivo= $faker->city();
            $holiday->dataDiPartenza= $faker->date();
            $holiday->dataDiArrivo= $faker->date();
            $holiday->prezzo= $faker->numberBetween(50, 600);
            $holiday->descrizione= $faker->text();

            $holiday->save();
        }
    }
}
