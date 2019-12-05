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

      //User::create(['name'=>'user', 'email'=>'user@user.com', 'password'=>Hash::make('user'), 'is_admin'=>0]);
      //User::create(['name'=>'admin', 'email'=>'admin@admin.com', 'password'=>Hash::make('admin'), 'is_admin'=>1]);

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
