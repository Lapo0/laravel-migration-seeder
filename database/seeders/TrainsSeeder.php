<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $orario_partenza = $faker->dateTimeInInterval('-1 week', '+3 days');
        $orario_arrivo = $faker->dateTimeBetween($orario_partenza, '+3 days');

        for($i = 0; $i < 100; $i++) {

            $train = new Train();

            $train->agency = $faker->word();
            $train->departure_station = $faker->sentence(3);
            $train->arrival_station = $faker->sentence(3);
            $train->departure_time = $orario_partenza;
            $train->arrival_time = $orario_arrivo;
            $train->train_code = $faker->bothify('??-###');
            $train->carriages_num = $faker->numberBetween(0, 25);
            $train->is_on_time = $faker->boolean();
            $train->is_cancelled = $faker->boolean();
            $train->price = $faker->numberBetween(12, 25);

            $train->save();
        }

    }
}
