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
                'name' => 'ファクティブ7',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/FACTIVE7.png',
                'repulsion' => 'Midfirst',
                'feeling' => 'Hard',
                'weight' => 83.0,
                'price' => 5720,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'セプティアーフィール',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/Septear+feel.png',
                'repulsion' => 'Midfirst',
                'feeling' => 'Middle',
                'weight' => 88.0,
                'price' => 13200,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'バイオリン カーボン',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/Viorin+carbon.png',
                'repulsion' => 'Midfirst',
                'feeling' => 'Hard',
                'weight' => 90.0,
                'price' => 22000,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'アコースティック カーボン',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/Acoustic+carbon.png',
                'repulsion' => 'Midfirst',
                'feeling' => 'Hard',
                'weight' => 90.0,
                'price' => 22000,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'フライアット カーボン',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/FLYATT+CARBON.png',
                'repulsion' => 'Mid',
                'feeling' => 'Middle',
                'weight' => 82.0,
                'price' => 7480,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => '佳純ベーシック',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/Kasumi+Basic.png',
                'repulsion' => 'Mid',
                'feeling' => 'Middle',
                'weight' => 85.0,
                'price' => 8250,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'ラティカ',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/Latika.png',
                'repulsion' => 'Mid',
                'feeling' => 'Middle',
                'weight' => 88.0,
                'price' => 7150,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'セプティアー',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/Septear.png',
                'repulsion' => 'Mid',
                'feeling' => 'Hard',
                'weight' => 85.0,
                'price' => 9680,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'サナリオンS',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/Sanalion.png',
                'repulsion' => 'Midslow',
                'feeling' => 'Hard',
                'weight' => 78.0,
                'price' => 5500,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'ビオンセロ',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/VIOLONCELLO.png',
                'repulsion' => 'Midslow',
                'feeling' => 'Soft',
                'weight' => 92.0,
                'price' => 19800,
            ],
            
            [
                'maker' => 'VICTAS',
                'name' => 'KOKI NIWA WOOD',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/KOKI+NIWA+WOOD.png',
                'repulsion' => 'First',
                'feeling' => 'Hard',
                'weight' => 90.0,
                'price' => 16500,
            ],
            
            [
                'maker' => 'VICTAS',
                'name' => 'KOKI NIWA',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/KOKI+NIWA.png',
                'repulsion' => 'Midfirst',
                'feeling' => 'Hard',
                'weight' => 88.0,
                'price' => 22000,
            ],
            
            [
                'maker' => 'VICTAS',
                'name' => 'QUARTET VFC',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/QUARTET+VFC.png',
                'repulsion' => 'First',
                'feeling' => 'Hard',
                'weight' => 88.0,
                'price' => 16500,
            ],
            
            [
                'maker' => 'VICTAS',
                'name' => 'ZX-GEAR IN',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/ZX-GEAR+IN.png',
                'repulsion' => 'Midfirst',
                'feeling' => 'Hard',
                'weight' => 92.0,
                'price' => 13200,
            ],
            
            [
                'maker' => 'VICTAS',
                'name' => 'ZX-GEAR FIBER',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/ZX-GEAR+FIBER.png',
                'repulsion' => 'Mid',
                'feeling' => 'Soft',
                'weight' => 85.0,
                'price' => 11000,
            ],
            
            [
                'maker' => 'VICTAS',
                'name' => 'Fire Fall AC',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/Fire+Fall+AC.png',
                'repulsion' => 'First',
                'feeling' => 'Hard',
                'weight' => 88.0,
                'price' => 11000,
            ],
            
            [
                'maker' => 'VICTAS',
                'name' => 'DYNA FIVE',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/DYNA+FIVE.png',
                'repulsion' => 'Midslow',
                'feeling' => 'Soft',
                'weight' => 85.0,
                'price' => 7700,
            ],
            
            [
                'maker' => 'VICTAS',
                'name' => 'DYNA CARBON',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/DYNA+CARBON.png',
                'repulsion' => 'Midslow',
                'feeling' => 'Middle',
                'weight' => 85.0,
                'price' => 8800,
            ],
            
            [
                'maker' => 'VICTAS',
                'name' => 'KOJI MATSUSHITA',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/KOJI+MATSUSHITA.png',
                'repulsion' => 'Slow',
                'feeling' => 'Soft',
                'weight' => 87.0,
                'price' => 11000,
            ],
            
            [
                'maker' => 'VICTAS',
                'name' => 'SWAT',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/SWAT.png',
                'repulsion' => 'Midslow',
                'feeling' => 'SOft',
                'weight' => 85.0,
                'price' => 6050,
            ],
            
            [
                'maker' => 'VICTAS',
                'name' => 'SWAT CARBON',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/SWAT+CARBON.png',
                'repulsion' => 'Midslow',
                'feeling' => 'Middle',
                'weight' => 85.0,
                'price' => 7150,
            ],
            
            [
                'maker' => 'VICTAS',
                'name' => 'Liam Pitchford',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/Liam+Pitchford.png',
                'repulsion' => 'First',
                'feeling' => 'Hard',
                'weight' => 90.0,
                'price' => 22000,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => 'TIMO BOLL ALC',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/TIMO+BOLL+ALC.png',
                'repulsion' => 'Midfirst',
                'feeling' => 'Middle',
                'weight' => 86.0,
                'price' => 19800,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => '水谷隼 ZLC',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/Mizutani+Jun+ZLC.png',
                'repulsion' => 'First',
                'feeling' => 'Midfirst',
                'weight' => 87.0,
                'price' => 27500,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => '張継科 ZLC',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/%E5%BC%B5%E7%B6%99%E7%A7%91+ZLC.png',
                'repulsion' => 'Midfirst',
                'feeling' => 'Middle',
                'weight' => 88.0,
                'price' => 27500,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => '林高遠 ALC',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/%E6%9E%97%E9%AB%98%E9%81%A0+ALC.png',
                'repulsion' => 'Midfirst',
                'feeling' => 'Middle',
                'weight' => 88.0,
                'price' => 19800,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => 'インナーフォース レイヤー ZLC',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/INNERFORCE+LAYER+ZLC.png',
                'repulsion' => 'Mid',
                'feeling' => 'Middle',
                'weight' => 89.0,
                'price' => 23650,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => 'インナーフォース レイヤー ALC',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/INNERFORCE+LAYER+ALC.png',
                'repulsion' => 'Mid',
                'feeling' => 'Middle',
                'weight' => 88.0,
                'price' => 16500,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => 'SK7クラシック',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/SK7%E3%82%AF%E3%83%A9%E3%82%B7%E3%83%83%E3%82%AF.png',
                'repulsion' => 'Midfirst',
                'feeling' => 'Middle',
                'weight' => 90.0,
                'price' => 7480,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => 'コルベル',
                'image' => 'https://selectionblog.s3.us-east-2.amazonaws.com/Rucket/KORBEL.png',
                'repulsion' => 'Mid',
                'feeling' => 'Middle',
                'weight' => 92.0,
                'price' => 6050,
            ],
            
        ]);
    }
}
