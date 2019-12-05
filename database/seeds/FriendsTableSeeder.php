<?php

use Illuminate\Database\Seeder;
use App\Friends;

class FriendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =
        [
            [
                'user_id_1'=>1,
                'user_id_2'=>2,
                'isAccepted'=>0
            ],
            [
                'user_id_1'=>1,
                'user_id_2'=>3,
                'isAccepted'=>1
            ]
        ];

        foreach ($data as $key => $value) {
           Friends::create($value);
       }
    }
}
