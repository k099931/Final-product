<?php

use Illuminate\Database\Seeder;
use App\Rucket;

class RucketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ruckets')->insert([
            [
                'maker' => 'Nittaku',
                'name' => 'Viorin',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/Viorin.png',
                'repulsion' => 'Midslow',
                'feeling' => 'Soft',
                'weight' => 88.0,
                'price' => 19800,
            ],
        
            [
                'maker' => 'Nittaku',
                'name' => 'Acoustic',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/Acoustic.png',
                'repulsion' => 'Mid',
                'feeling' => 'Middle',
                'weight' => 88.0,
                'price' => 19800,
            ],
        ]);
    }
}
