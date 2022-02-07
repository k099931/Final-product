<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TOP</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
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
            
            .user {
               display: block;
               text-align: left;
            }
            
            .logo2 {
                display: block;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <header class="header">
            <div class="user">{{ Auth::user()->name }}</div>
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
        <figure class="image"><img src="https://selectionblog.s3.us-east-2.amazonaws.com/%E8%A6%8B%E5%87%BA%E3%81%97%E7%94%BB%E5%83%8F.png" width="1024" height="512"></figure>
            <div class="explanation">
                <hr size="5" color="#4B0082">
                    <h1>・アプリ説明</h1>
                <hr size="5" color="#4B0082">
                <h2>
                    本アプリを作成した経緯としては、卓球の用具について知識の無い初心者の方や、若い世代の方でも、自分に合った用具を選ぶことを可能にするアプリをあればいいな、との考えから作成を
                    始めました。機能としては、「ラバー検索機能」や「ラケット検索機能」、「コメント機能」などがあります。
                </h2><br>
            </div>
            <div class="how-to-use">
                <hr size="5" color="#4B0082">
                    <h1>・アプリ使用方法</h1>
                <hr size="5" color="#4B0082">
                <h2>
                    画面右上のメニューバーから、使用したい機能をクリックし、その画面へ遷移してください。
                    そのあとは、自分に合った用具を探すだけです。
                </h2>
            </div>
            <script src="https://ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
    </body>
</html>