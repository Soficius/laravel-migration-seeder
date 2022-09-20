<?php

use App\Trains;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Trains();

        $train->azienda = 'trenord';
        $train->stazione_partenza = 'Milano';
        $train->stazione_arrivo = 'Roma';
        $train->orario_partenza = '2022-10-10 16:00:00';
        $train->orario_arrivo = '2022-10-10 20:00:00';
        $train->codice_treno = 324353;
        $train->numero_carrozze = 3;
        $train->stato_treno = 'in orario';

        $train->save();
    }
}
