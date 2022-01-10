<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>TOP</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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
        </style>
    </head>
    <body>
        <header class="header">
            <div class="logo">TOP</div>
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
        <h1 style="text-align:center" ><font size="7">卓球用具選定アプリ</font></h1>
        <h2 style="text-align:center">～　あなたの求める用具を探そう！　～</h2>
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
    </body>