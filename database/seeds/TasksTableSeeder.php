<?php

use App\Task;

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
 
        // Create 20 records
        for ($i = 0; $i < 20; $i++) {
            Task::create([
                'project_id'  => $faker->numberBetween($min = 1, $max = 20),
                'user_id'     => $faker->numberBetween($min = 1, $max = 20),                
                'description' => $faker->text($maxNbChars = 300),
                'hours'       => $faker->numberBetween($min = 100, $max = 200),
                'rate'        => $faker->numberBetween($min = 200, $max = 1000),
                'comment'     => $faker->text($maxNbChars = 300),
                'date'        => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status'      => $faker->word, 
                'approved'    => $faker->boolean($chanceOfGettingTrue = 50)
            ]);
        } 
    }
}
