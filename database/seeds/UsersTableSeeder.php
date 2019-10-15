<?php

use Illuminate\Database\Seeder;
use App\User;

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

      for ($i = 0; $i < 10; $i++) {
        User::create([
          'firstname' => $faker->firstName,
          'lastname' => $faker->lastName,
          'email' => $faker->safeEmail,
          'password' => $faker->password,
          'isAdmin' => $faker->boolean
        ]);
      }
    }
}
