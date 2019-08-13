<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
           [
            'user_id' =>  '1',
            'departure_time' => mt_rand(1,60),
            'arrival_time' => mt_rand(1,60),
            'mileaage' => mt_rand(1,60),
            'driving_time' => mt_rand(1,60),
            'map' => str_random(1,50),
            
           ],
        [
        'user_id' =>  '1',
        'departure_time' => mt_rand(1,60),
        'arrival_time' => mt_rand(1,60),
        'mileaage' => mt_rand(1,60),
        'driving_time' => mt_rand(1,60),
        'map' => str_random(1,50),
       
        ],
        [
            'user_id' =>  '1',
            'departure_time' => mt_rand(1,60),
            'arrival_time' => mt_rand(1,60),
            'mileaage' => mt_rand(1,60),
            'driving_time' => mt_rand(1,60),
            'map' => str_random(1,50),
            
            ],
        ]);
    }
}
