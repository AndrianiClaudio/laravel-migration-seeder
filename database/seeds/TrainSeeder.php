<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i = 0; $i < 30; $i++) {
            $newTrain = new Train();
            $newTrain->agency = $faker->word();
            $newTrain->departure_station = $faker->word();
            $newTrain->arrival_station = $faker->word();

            $times = [
                '2022-04-02 15:00:00',
                '2022-04-02 16:45:00',
                '2022-04-02 18:20:00',
                '2022-04-02 21:00:00',
                '2022-04-02 22:00:00'
            ];
            $newTrain->departure_time = $times[rand(0, count($times) - 1)];
            $newTrain->arrival_time = $times[rand(0, count($times) - 1)];

            $newTrain->train_code = $faker->randomNumber(4, false);
            $newTrain->carriages = $faker->randomNumber(2, false);

            $newTrain->in_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();
            $newTrain->save();
        }
    }
}
