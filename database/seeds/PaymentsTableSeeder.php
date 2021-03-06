<?php

use App\Payment;

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
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
            Payment::create([
                'company_id'  => $faker->numberBetween($min = 1, $max = 20),
                'date'        => $faker->date($format = 'Y-m-d', $max = 'now'),
                'amount'      => $faker->numberBetween($min = 1000, $max = 20000),
                'description' => $faker->text($maxNbChars = 300)
            ]);
        }
    }
}
