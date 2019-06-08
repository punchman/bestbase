<?php

use App\ProjectDetail;

use Illuminate\Database\Seeder;

class ProjectDetailsTableSeeder extends Seeder
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
            ProjectDetail::create([
                'project_id'     => $faker->numberBetween($min = 1, $max = 20),
                'description'    => $faker->text($maxNbChars = 300)
            ]);
        }

    }

    // protected $table = 'projectdetails';
}
