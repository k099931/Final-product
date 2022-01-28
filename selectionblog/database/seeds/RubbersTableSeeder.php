<?php

use Illuminate\Database\Seeder;
use App\Rubber;

class RubbersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('rubbers')->insert([
            [
                'maker' => 'Nittaku',
                'name' => 'Fastarc G-1',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/Fastarc+G-1.png',
                'speed' => 15.00,
                'spin' => 12.50,
                'hardness' => 37.5,
                'price' => 6600,
                'user_id' => 1,
            ],
        
            [
                'maker' => 'Nittaku',
                'name' => 'Fastarc C-1',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/Fastarc+C-1.png',
                'speed' => 15.25,
                'spin' => 12.25,
                'hardness' => 35.0,
                'price' => 6380,
                'user_id' => 1,
            ],
        ]);
    }
}
