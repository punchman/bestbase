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
                'company_name' => $faker->company,
                'address1'     => $faker->address,
                'address2'     => $faker->streetAddress,
                'city'         => $faker->city,
                'state'        => $faker->state,
                'country'      => $faker->country
            ]);
        }

    }
}
