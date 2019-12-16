<?php

use Illuminate\Database\Seeder;
use App\AudioNote;
use App\User;

class AudioNoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      AudioNote::truncate();

      $faker = \Faker\Factory::create();

      for ($i = 0; $i < 10; $i++) {
        AudioNote::create([
          'user_id' => User::all()->random()->id,
          'latitude' => $faker->latitude(46.0000, 47.0000),
          'longitude' => $faker->longitude(6.000, 8.0000),
          'file_name' => "11_2019_11_07_13_26_02.mp3"
        ]);
      }
    }
}
