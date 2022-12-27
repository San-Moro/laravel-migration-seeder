<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) 
        {
            $newTrain = new Train();
            $newTrain->azienda = $faker->randomElement(['Trenitalia', 'InterCity', 'Italo']);
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->orario_di_arrivo = $faker->dateTimeInInterval($newTrain->departure_time, "+20 hour");
            $newTrain->codice_treno = $faker->bothify('####');
            $newTrain->numero_carrozze = $faker->randomDigitNotNull(0);
            $newTrain->in_orario = $faker->numberBetween(0, 1);
            $newTrain->cancellato = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
