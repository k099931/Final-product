<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ラケット一覧</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
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
           .form-group {
              text-align:left;
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
            {{--　ヘッダー内ロゴ画像　--}}
            <div class="logo"><figure class="image"><img src="https://selectionblog.s3.us-east-2.amazonaws.com/%E3%83%AD%E3%82%B4%E6%96%87%E5%AD%97%E4%BB%98.png" width="250" height="50"></figure></div>
            <div class="nav">
                <input id="drawer_input" class="drawer_hidden" type="checkbox">
                <label for="drawer_input" class="drawer_open"><span></span></label>
                
                <nav class="nav_content">
                    <ul class="nav_list">
                        {{--　ハンバーガーメニュー　--}}
                        <li class="nav_item"><a href="/">TOP</a></li><br>
                        <li class="nav_item"><a href="/rubbers">ラバー一覧</a></li><br>
                        <li class="nav_item"><a href="/ruckets">ラケット一覧</a></li><br>
                        <li class="nav_item"><a href="/select">選定画面</a></li><br>
                        <li class="nav_item"><a href="/recommend">お勧め画面</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <form action='/ruckets/search' method="POST">
            {{--　検索ボックス　--}}
           @csrf
           <div class='form-group'>
               <lavel>ラケット名</lavel>
               <input type="text" class="form-control col-md-5" placeholder="検索したいラケット名を入力してください" name="name">
           </div>
           <div class='form-group'>
               <lavel>価格</lavel>
               <input type="text" class="form-control col-md-5" placeholder="価格を入力してください" name="price" value="{{ old("name") }}">
           </div>
           
           <div class='form-group'>
               <lavel>価格の条件</lavel>
               <select class="form-control col-md-5" name="price_condition">
                   <option selected value="0">選択 ．．．</option>
                   <option value="1">以上</option>
                   <option value="2">以下</option>
               </select>
           </div>
           
           <div class='form-group'>
               {{--　保存ボタン（検索用）　--}}
              <div class="col-md-offset-2 col-md-5">
                <button type="submit" class='btn btn-primary btn-block'>検索</button>
              </div>
           </div>
        
        
        <div class='ruckets'>
            {{--　ラケット一覧表示　--}}
            @php
                $id = 0;
            @endphp
            @foreach ($ruckets as $rucket)
                @if($rucket->id > $id)
                {{--　メーカー毎に表示　--}}
                  <hr size="5" color="#476FBF">
                  <h1>&emsp;{{ $rucket->maker }}</h1>
                  <hr size="5" color="476FBF">
                  @php
                    $target = $rucket->maker;
                  @endphp
                  @foreach ($ruckets as $rucket)
                     <div class='flex'>
                     @if($target == $rucket->maker)
                         <figure class="image"><img src="{{ $rucket->image }}" width="258" height="120"></figure>
                         <h2 class='right'>
                             <a href="/ruckets/{{ $rucket->id }}">・{{ $rucket->name }}</a>
                         </h2>
                         @php
                            $id = $rucket->id;
                         @endphp
                     @endif
                     </div>
                  @endforeach
                 @endif
            @endforeach
        </div>
        <script src="https://ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>