<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ラケット詳細</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
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
            <div class="logo"><figure class="image"><img src="https://selectionblog.s3.us-east-2.amazonaws.com/%E3%83%AD%E3%82%B4%E6%96%87%E5%AD%97%E4%BB%98.png" width="250" height="50"></figure></div>
            <div class="nav">
                <input id="drawer_input" class="drawer_hidden" type="checkbox">
                <label for="drawer_input" class="drawer_open"><span></span></label>
                
                <nav class="nav_content">
                    <ul class="nav_list">
                        <li class="nav_item"><a href="/">TOP</a></li><br>
                        <li class="nav_item"><a href="/rubbers">ラバー一覧</a></li><br>
                        <li class="nav_item"><a href="/ruckets">ラケット一覧</a></li><br>
                        <li class="nav_item"><a href="/select">選定画面</a></li><br>
                        <li class="nav_item"><a href="/recommend">お勧め画面</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <hr size="5" color="#476FBF">
        <h1>{{ $rucket->maker }}&emsp;/&emsp;{{ $rucket->name }}</h1>
        <hr size="5" color="#476FBF">
        <div class='flex'>
            <figure class='image'><img src="{{ $rucket->image }}" width="516" height="240"></figure>
            <span style="border-bottom: solid 2px blue;">
                <h2 class='right'>
                反発：{{ $rucket->repulsion }}<br><br>
                打球感：{{ $rucket->feeling }}<br><br>
                重量：{{ $rucket->weight }}<br><br>
                価格：{{ $rucket->price}}
               </h2>
            </span>
        </div>
        <div class='evaluation'>
            <span style="border-bottom: solid 2px blue;">
                <hr size="5" color="#476FBF">
                <h1>皆の評価</h1>
                <hr size="5" color="#476FBF">
                <div class="comments">
                    @foreach ($rucketcomments as $rucketcomment)
                       <div class="comment">
                           @if( $rucketcomment->rucket_id === $rucket->id )
                              @for ($i = 0; $i <  $rucketcomment->stars ; $i++ )
                                    <p style="display:inline;"><font size="6" color="#ffcc00">★</font></p>
                              @endfor
                              <p class="author">{{ $rucketcomment->user->name }}</p>
                              <h2 class="comment">{{ $rucketcomment->comment }}</h2>
                              <p class="created">{{ $rucketcomment->created_at }}</p><br>
                           @endif
                       </div>
                    @endforeach
                </div>
            </span>
            <form action="/ruckets" method="POST">
                @csrf
                <div class="create">
                    <hr size="5" color="#476FBF">
                    <h2>コメント</h2>
                    <hr size="5" color="#476FBF">
                        <div class="rate-form">
                           <input id="star5" type="radio" name="rucketcomment[stars]" value="5">
                           <label for="star5">★</label>
                           <input id="star4" type="radio" name="rucketcomment[stars]" value="4">
                           <label for="star4">★</label>
                           <input id="star3" type="radio" name="rucketcomment[stars]" value="3">
                           <label for="star3">★</label>
                           <input id="star2" type="radio" name="rucketcomment[stars]" value="2">
                           <label for="star2">★</label>                       
                           <input id="star1" type="radio" name="rucketcomment[stars]" value="1">
                           <label for="star1">★</label>
                        </div>
                    <textarea name="rucketcomment[comment]" placeholder="素晴らしいラケットです。">{{ old('rucketcomment.comment') }}</textarea>
                    <p class="comment_error" style="color:red">{{ $errors->first('rucketcomment.comment') }}</p>
                    <input type="hidden" name="rucketcomment[rucket_id]" value="{{ $rucket->id }}">
                    <input type="hidden" name="rucketcomment[user_id]" value="{{ Auth::user()->id }}">
                </div>
                <input type="submit" value="保存"/>
            </form>
        </div>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <script src="https://ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>