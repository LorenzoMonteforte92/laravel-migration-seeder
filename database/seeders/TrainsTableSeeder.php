<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
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
        for($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->train_number = $faker->randomNumber(5, true);
            $newTrain->origin = $faker->city();
            $newTrain->destination = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->coaches_number = $faker->randomDigit(); 
            $newTrain->on_time = $faker->randomElement([1, 0]);
            $newTrain->cancelled = $faker->randomElement([1, 0]);
            $newTrain->save();
        }
    }
}
