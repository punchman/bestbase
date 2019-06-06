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
                'ProjectID'   => $faker->numberBetween($min = 1, $max = 20),
                'UserID'      => $faker->numberBetween($min = 1, $max = 20),                
                'Description' => $faker->text($maxNbChars = 300),
                'Hours'       => $faker->numberBetween($min = 100, $max = 200),
                'Rate'        => $faker->numberBetween($min = 200, $max = 1000),
                'Comment'     => $faker->text($maxNbChars = 300),
                'Date'        => $faker->date($format = 'Y-m-d', $max = 'now'),
                'Status'      => $faker->word, 
                'Approved'    => $faker->boolean($chanceOfGettingTrue = 50)
            ]);
        } 
    }
}
