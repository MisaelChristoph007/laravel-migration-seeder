<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {

        for($i = 0; $i < 20; $i++) {
              // 1. Creare instanza di Travel -> row
              $new_travel = new Travel();
               // 2. generare i contenuti delle colonne
               $new_travel->city = $faker->text(20);
               $new_travel->hotel = $faker->text(20);
               $new_travel->adults = $faker->numberBetween(2, 10);
               $new_travel->price = $faker->numberBetween(200, 3000);
               $new_travel->day = $faker->numberBetween(2, 31);

              $new_travel->save();
        }
    }
}
