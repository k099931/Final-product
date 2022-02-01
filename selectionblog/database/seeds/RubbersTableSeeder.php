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
                'name' => 'ファクティブ',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/FACTIVE.png',
                'speed' => 14.75,
                'spin' => 11.75,
                'hardness' => 35.0,
                'price' => 4400,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'ファスターク P-1',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/Fastarc+P-1.png',
                'speed' => 15.50,
                'spin' => 12.25,
                'hardness' => 37.5,
                'price' => 6600,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'ファスターク S-1',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/Fastarc+S-1.png',
                'speed' => 15.50,
                'spin' => 11.75,
                'hardness' => 35.0,
                'price' => 4840,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'フライアット スピン',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/FLYATT+SPIN.png',
                'speed' => 14.25,
                'spin' => 12.25,
                'hardness' => 35.0,
                'price' => 4180,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'フライアット ハード',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/FLYATT+HARD.png',
                'speed' => 15.00,
                'spin' => 11.55,
                'hardness' => 35.0,
                'price' => 4180,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'フライアット ソフト',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/FLYATT+SOFT.png',
                'speed' => 15.00,
                'spin' => 11.50,
                'hardness' => 30.0,
                'price' => 4180,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'ハモンド',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/HAMMOND.png',
                'speed' => 12.50,
                'spin' => 10.00,
                'hardness' => 30.0,
                'price' => 3520,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'ザルト',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/ZALT.png',
                'speed' => 13.75,
                'spin' => 11.50,
                'hardness' => 30.0,
                'price' => 4070,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'キョウヒョウプロ3 -TURBO BLUE-',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/%E3%82%AD%E3%83%A7%E3%82%A6%E3%83%92%E3%83%A7%E3%82%A6%E3%83%97%E3%83%AD3+%E3%82%BF%E3%83%BC%E3%83%9C%E3%83%96%E3%83%AB%E3%83%BC.png',
                'speed' => 14.75,
                'spin' => 15.00,
                'hardness' => 35.0,
                'price' => 6930,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'キョウヒョウプロ3 -TURBO ORANGE-',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/%E3%82%AD%E3%83%A7%E3%82%A6%E3%83%92%E3%83%A7%E3%82%A6%E3%83%97%E3%83%AD3+%E3%82%BF%E3%83%BC%E3%83%9C%E3%82%AA%E3%83%AC%E3%83%B3%E3%82%B8.png',
                'speed' => 14.75,
                'spin' => 15.00,
                'hardness' => 45.0,
                'price' => 6600,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'キョウヒョウ ネオ3',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/%E3%82%AD%E3%83%A7%E3%82%A6%E3%83%92%E3%83%A7%E3%82%A6%E3%83%8D%E3%82%AA3.png',
                'speed' => 11.25,
                'spin' => 15.00,
                'hardness' => 42.5,
                'price' => 5280,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'ルーキング',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/RUUKING.png',
                'speed' => 8.00,
                'spin' => 9.25,
                'hardness' => 32.5,
                'price' => 2750,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'Nittaku',
                'name' => 'ジャミン',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/jammin.png',
                'speed' => 8.25,
                'spin' => 9.00,
                'hardness' => 35.0,
                'price' => 2750,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => 'ディグニクス05',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/Dignics+05.png',
                'speed' => 13.50,
                'spin' => 12.00,
                'hardness' => 35.0,
                'price' => 0000,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => 'ディグニクス09C',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/Dignics+09C.png',
                'speed' => 13.00,
                'spin' => 13.00,
                'hardness' => 39.5,
                'price' => 0000,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => 'ディグニクス64',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/Dignics+64.png',
                'speed' => 14.00,
                'spin' => 11.00,
                'hardness' => 40.0,
                'price' => 0000,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => 'テナジー05',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/TENERGY+05.png',
                'speed' => 13.00,
                'spin' => 11.50,
                'hardness' => 30.5,
                'price' => 0000,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => 'テナジー80',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/TENERGY+80.png',
                'speed' => 13.25,
                'spin' => 11.25,
                'hardness' => 30.5,
                'price' => 0000,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => 'テナジー64',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/TENERGY+64.png',
                'speed' => 13.50,
                'spin' => 10.50,
                'hardness' => 30.5,
                'price' => 0000,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => 'ロゼナ',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/ROZENA.png',
                'speed' => 13.00,
                'spin' => 10.80,
                'hardness' => 30.0,
                'price' => 5500,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => 'ブライス ハイスピード',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/BryceHIGHSPEED.png',
                'speed' => 14.50,
                'spin' => 10.30,
                'hardness' => 30.0,
                'price' => 6600,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => 'ラウンデル',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/ROUNDELL.png',
                'speed' => 12.80,
                'spin' => 10.20,
                'hardness' => 30.0,
                'price' => 4620,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => 'スレイバー',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/SRIVER.png',
                'speed' => 10.00,
                'spin' => 8.00,
                'hardness' => 33.0,
                'price' => 3520,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => 'スレイバーEL',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/SRIVER+EL.png',
                'speed' => 10.00,
                'spin' => 8.00,
                'hardness' => 30.0,
                'price' => 3520,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => 'アイビス',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/AIBISS.png',
                'speed' => 10.50,
                'spin' => 11.00,
                'hardness' => 45.0,
                'price' => 5500,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => 'タキネス ドライブ',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/TACKNESS+DRIVE.png',
                'speed' => 8.50,
                'spin' => 9.00,
                'hardness' => 33.0,
                'price' => 3080,
                'user_id' => 1,
            ],
            
            [
                'maker' => 'BUTTERFLY',
                'name' => 'タキネス チョップ',
                'image' =>'https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/TACKNESS+CHOP.png',
                'speed' => 6.50,
                'spin' => 10.00,
                'hardness' => 28.0,
                'price' => 3080,
                'user_id' => 1,
            ],
            
        ]);
    }
}
