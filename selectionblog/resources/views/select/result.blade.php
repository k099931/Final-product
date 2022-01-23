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
            <h1>選定結果</h1>
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
                if($rucket->repulsion == "Midslow")
                    $repulsion = 10;
                $performance = 0;
                $performance = $performance + $repulsion + $frubber->speed + $brubber->speed;
            @endphp
            <h2 class='performance'>総合性能数値：{{ $performance }}</h2>
            @php
                if($performance == 40.25)
                    $recommend = "E";
            @endphp
            <h2 class='rank'>ランク：{{ $recommend }}</h2>
            @if(!empty($message))
            <div class="alert alert-primary" role="alert">{{ $message }}</div>
            @endif
        </div>
    </body>
</html>