<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>選定結果</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
           .flex {
              display: flex;
           }
           .flex .image {
              margin: 0;
              padding: 0;
              overflow: hidden;
              position: relative;
           }
           .flex .right{
              margin: 0 0 0 20px;
              padding: 0;
              line-height: 5;
           }
           
                       .header {
               display: flex;
               justify-content: center;
               align-items: center;
               padding: 0 20px;
               background: #fff;
               position: relative;
            }
            
            .logo {
               font-size: 24px;
            }
            
            .drawer_hidden {
               display: none;
            }
            
            .drawer_open {
               display: flex;
               justify-content: center;
               align-items: center;
               position: absolute;
               right: 20px;
               z-index: 100;
               cursor: pointer;
            }
            
            .drawer_open span,
            .drawer_open span:before,
            .drawer_open span:after {
               content: '';
               display: block;
               height: 3px;
               width: 25px;
               border-radius: 3px;
               background: #333;
               transition: 0.5s;
               position: absolute;
            }
            
            .drawer_open span:before {
               bottom: 8px;
            }
            
            .drawer_open span:after {
               top: 8px;
            }
            
            #drawer_input:checked ~ .drawer_open span {
               background: rgba(255, 255, 255, 0);
            }
            
            #drawer_input:checked ~ .drawer_open span::before {
               bottom: 0;
               transform: rotate(45deg);
            }
            
            #drawer_input:checked ~ .drawer_open span::after {
               top: 0;
               transform: rotate(-45deg);
            }
            
            .nav_content {
               width: 100%;
               height: 100%;
               position: fixed;
               bottom: 100%;
               left: 0%;
               z-index: 99;
               background: rgb(110, 110, 110);
               transition: .5s;
               text-align: center;
               padding-top: 20px;
            }
            
            .nav_list {
               list-style: none;
            }
            
            .nav_item a {
               color: #fff;
               text-decoration: none;
            }
            
            #drawer_input:checked ~ .nav_content {
               bottom: 0;
            }
        </style>
    </head>
    <body>
        <header class="header">
            <div class="logo">選定結果</div>
            <div class="nav">
                <input id="drawer_input" class="drawer_hidden" type="checkbox">
                <label for="drawer_input" class="drawer_open"><span></span></label>
                
                <nav class="nav_content">
                    <ul class="nav_list">
                        <li class="nav_item"><a href="/">TOP</a></li><br>
                        <li class="nav_item"><a href="/rubbers">ラバー一覧</a></li><br>
                        <li class="nav_item"><a href="/ruckets">ラケット一覧</a></li><br>
                        <li class="nav_item"><a href="/select">選定画面</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div style="margin-top:50px;">
            <hr size="5" color="#B3424A">
            <h1>選定結果</h1>
            <hr size="5" color="#B3424A">
            @if(isset($ruckets))
                @foreach($ruckets as $rucket)
                    <h2 class='rucket'>使用ラケット：{{ $rucket->name }}</h2>
                @endforeach
            @endif
            @if(isset($frubbers))
                @foreach($frubbers as $frubber)
                    <h2 class='f_rubber'>フォアラバー：{{ $frubber->name }}</h2>
                @endforeach
            @endif
            @if(isset($brubbers))
                @foreach($brubbers as $brubber)
                    <h2 class='b_rubber'>バックラバー：{{ $brubber->name }}</h2>
                @endforeach
            @endif
            @php
                if($rucket->repulsion == "Slow")
                    $repulsion = 5.5;
                else if($rucket->repulsion == "Midslow")
                    $repulsion = 6.5;
                else if($rucket->repulsion == "Mid")
                    $repulsion = 7.5;
                else if($rucket->repulsion == "Midfirst")
                    $repulsion = 8.5;
                else if($rucket->repulsion == "First")
                    $repulsion = 9.5;
                $performance = 0;
                $performance = $performance + $repulsion + $frubber->speed + $brubber->speed;
            @endphp
            <h2 class='performance'>総合性能数値：{{ $performance }}</h2>
            @php
                if($performance < 10)
                    $rank = "E";
                else if(10 <= $performance && $performance < 18)
                    $rank = "D";
                else if(18 <= $performance && $performance < 26)
                    $rank = "C";
                else if(26 <= $performance && $performance < 34)
                    $rank = "B";
                else if(34 <= $performance)
                    $rank = "A";
            @endphp
            <h2 class='rank'>ランク：{{ $rank }}</h2>
            @php
                if($rucket->feeling == "Soft"):
                    if($frubber->hardness <= 30 && $brubber->hardness <= 30):
                        $recommend = "安定感と回転に優れているが、スピードが出しにくい。初心者やブロック主戦型の方にお勧め。";
                    elseif($frubber->hardness <= 30 && 30 < $brubber->hardness):
                        $recommend = "フォアでブロックをし、バックで攻撃をする方にお勧め。初心者や子ども、女性にはお勧めできない。";
                    elseif($frubber->hardness > 30 && $brubber->hardness <= 30):
                        $recommend = "フォアで良く攻撃し、バックは繋ぐ程度の方にお勧め。初心者や子ども、女性にはお勧めできない。";
                    elseif($frubber->hardness > 30 && 30 < $brubber->hardness):
                        $recommend = "回転量が多く、加速に優れている。中距離でドライブを多用する選手、しっかりと回転をかける感覚を持っている選手にお勧め。";
                    endif;
                elseif($rucket->feeling == "Middle"):
                    if($frubber->hardness <= 30 && $brubber->hardness <= 30):
                        $recommend = "回転は程よくかけられるが、スピードはあまり出ない。初心者から中級者の幅広い方が扱える。";
                    elseif($brubber->hardness <= 30 && 30 < $brubber->hardness):
                        $recommend = "フォアよりもバックでしっかり攻撃したい方や中級者の方にお勧め。";
                    elseif(30 < $frubber->hardness && $brubber->hardness <= 30):
                        $recommend = "バックよりもフォアでしっかり攻撃したい方や中級者の方にお勧め。";
                    elseif(30 < $frubber->hardness && 30 < $brubber->hardness):
                        $recommend = "フォアでもバックでもドライブやスマッシュなどの攻撃をバランスよくこなしたい方にお勧め。";
                    endif;
                elseif($rucket->feeling == "Hard"):
                    if($frubber->hardness <= 30 && $brubber->hardness <= 30):
                        $recommend = "インパクトに関わらず、常に一定量の回転をかけられる。ドライブをかけて卓球台の近くで戦う方にお勧め。";
                    elseif($frubber->hardness <= 30 && 30 < $brubber->hardness):
                        $recommend = "フォアではドライブをかけて、バックでは、球を弾くスマッシュのような打ち方をする方にお勧め。";
                    elseif(30 < $frubber->hardness && $brubber->hardness <= 30):
                        $recommend = "フォアではスマッシュのような球を弾く打ち方をし、バックでしっかりドライブをかける方にお勧め。";
                    elseif(30 < $frubber->hardness && 30 < $brubber->hardness):
                        $recommend = "スピードが出しやすいが、回転量が少なく、加速も少ない。スマッシュのような球を叩くプレーを多用する方、台の近くで戦う前陣速攻型の方にお勧め。";
                    endif;
                endif;
            @endphp
            <hr size="5" color="#B3424A">
            <h1 class='recommend'>こういう人向け</h2>
            <hr size="5" color="#B3424A">
            <h2>{{ $recommend }}</h2>
            
            @if(!empty($message))
            <div class="alert alert-primary" role="alert">{{ $message }}</div>
            @endif
        </div>
    </body>
</html>