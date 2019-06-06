<?php

use App\Company;

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
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
            Company::create([
                'CompanyName' => $faker->company,
                'Address1'    => $faker->address,
                'Address2'    => $faker->streetAddress,
                'City'        => $faker->city,
                'State'       => $faker->state,
                'Country'     => $faker->country
            ]);
        }

    }
}
