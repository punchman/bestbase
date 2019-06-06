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
                'ProjectName'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'CompanyID'    => $faker->numberBetween($min = 1, $max = 20),
                'DateFrom'     => $faker->date($format = 'Y-m-d', $max = 'now'),
                'DateTo'       => $faker->date($format = 'Y-m-d'),
                'Description'  => $faker->text($maxNbChars = 300),
                'Total'        => $faker->numberBetween($min = 1000, $max = 20000),
                'Status'       => $faker->word
            ]);
        } 
         
    }
}
