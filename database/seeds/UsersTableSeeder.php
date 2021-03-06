<?php

use App\User;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            User::create([
                'first_name' => $faker->firstNameMale,
                'last_name'  => $faker->lastName,
                'position'   => $faker->word,
                'email'      => $faker->firstNameMale.'.'.$faker->lastName.'@gmail.com',
                'password'   => bcrypt('password')
            ]);
        }
    }
}
