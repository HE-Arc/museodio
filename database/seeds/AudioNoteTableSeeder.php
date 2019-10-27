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
          'file_name' => $faker->name() . ".mp3"
        ]);
      }
    }
}
