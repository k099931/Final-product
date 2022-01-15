<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ラバー詳細</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
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
           }
           
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
            
            .rate-form {
                display: flex;
                flex-direction: row-reverse;
                justify-content: flex-end;
            }
            .rate-form input[type=radio] {
                display: none;
            }
            .rate-form label {
                position: relative;
                padding: 0 5px;
                color: #ccc;
                cursor: pointer;
                font-size: 35px;
            }
            .rate-form label:hover {
                color: #ffcc00;
            }
            .rate-form label:hover ~ label {
                color: #ffcc00;
            }
            .rate-form input[type=radio]:checked ~ label {
                color: #ffcc00;
            }
        </style>
    </head>
    <body>
        <header class="header">
            <div class="logo">ラバー詳細</div>
            <div class="nav">
                <input id="drawer_input" class="drawer_hidden" type="checkbox">
                <label for="drawer_input" class="drawer_open"><span></span></label>
                
                <nav class="nav_content">
                    <ul class="nav_list">
                        <li class="nav_item"><a href="/">TOP</a></li><br>
                        <li class="nav_item"><a href="/rubbers">ラバー一覧</a></li><br>
                        <li class="nav_item"><a href="/ruckets">ラケット一覧</a></li
                    </ul>
                </nav>
            </div>
        </header>
        <hr size="5" color="#B3424A">
        <h1>{{ $rubber->maker }}&emsp;/&emsp;{{ $rubber->name }}</h1>
        <hr size="5" color="#B3424A">
        <div class='flex'>
            <figure class='image'><img src="{{ $rubber->image }}" width="280" height="300"></figure>
            <span style="border-bottom: solid 2px blue;">
                <h2 class='right'>
                スピード：{{ $rubber->speed }}<br>
                回転：{{ $rubber->spin }}<br>
                硬度：{{ $rubber->hardness}}<br>
                価格：{{ $rubber->price}}
               </h2>
            </span>
        </div>
        <div class='evaluation'>
            <span style="border-bottom: solid 2px blue;">
                <hr size="5" color="#B3424A">
                <h1>皆の評価</h1>
                <hr size="5" color="#B3424A">
                <div class="comments">
                    @foreach ($rubbercomments as $rubbercomment)
                       <div class="comment">
                           @if( $rubbercomment->rubber_id === $rubber->id )
                              @for ($i = 0; $i <  $rubbercomment->stars ; $i++ )
                                    <p style="display:inline;"><font size="6" color="#ffcc00">★</font></p>
                              @endfor
                              <p class="author">{{ $rubbercomment->user->name }}</p>
                              <h2 class="comment">{{ $rubbercomment->comment }}</h2>
                              <p class="created">{{ $rubbercomment->created_at }}</p><br>
                           @endif
                       </div>
                    @endforeach
                </div>
            </span>
            <form action="/rubbers" method="POST">
                @csrf
                <div class="create">
                    <hr size="5" color="#B3424A">
                    <h2>コメント</h2>
                    <hr size="5" color="#B3424A">
                        <div class="rate-form">
                           <input id="star5" type="radio" name="rubbercomment[stars]" value="5">
                           <label for="star5">★</label>
                           <input id="star4" type="radio" name="rubbercomment[stars]" value="4">
                           <label for="star4">★</label>
                           <input id="star3" type="radio" name="rubbercomment[stars]" value="3">
                           <label for="star3">★</label>
                           <input id="star2" type="radio" name="rubbercomment[stars]" value="2">
                           <label for="star2">★</label>                       
                           <input id="star1" type="radio" name="rubbercomment[stars]" value="1">
                           <label for="star1">★</label>
                        </div>
                    <textarea name="rubbercomment[comment]" placeholder="素晴らしいラバーです。">{{ old('rubbercomment.comment') }}</textarea>
                    <p class="comment_error" style="color:red">{{ $errors->first('rubbercomment.comment') }}</p>
                    <input type="hidden" name="rubbercomment[rubber_id]" value="{{ $rubber->id }}">
                    <input type="hidden" name="rubbercomment[user_id]" value="{{ Auth::user()->id }}">
                </div>
                <input type="submit" value="保存"/>
            </form>
        </div>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <script>
            Vue.component('v-star', {
               props: ['value'],
               template: '<span><span v-for="number in parseInt(value)">&#x2B50;</span></span>'
            });
        </script>
    </body>
</html>