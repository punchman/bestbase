<?php

use App\Project;

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
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
            Project::create([
                'project_name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'company_id'   => $faker->numberBetween($min = 1, $max = 20),
                'date_from'    => $faker->date($format = 'Y-m-d', $max = 'now'),
                'date_to'      => $faker->date($format = 'Y-m-d'),
                'description'  => $faker->text($maxNbChars = 300),
                'amount'       => $faker->numberBetween($min = 1000, $max = 20000),
                'status'       => $faker->word
            ]);
        } 
         
    }
}
