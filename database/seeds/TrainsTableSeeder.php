<?php

use App\Trains;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $train = new Trains();

            $train->azienda = $faker->company();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = $faker->dateTime();
            $train->orario_arrivo = $faker->dateTime();
            $train->codice_treno = $faker->ean8();
            $train->numero_carrozze = $faker->randomDigitNotNull();
            $train->stato_treno = $faker->boolean();

            $train->save();
        }
    }
}
