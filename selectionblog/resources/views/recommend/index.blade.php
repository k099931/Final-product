<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>お勧め画面</title>
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
        <form action='/recommend/result' method="POST">
           @csrf
            <div class='selection'>
            <div class='question-1'>
                <hr size="5" color="#B3424A">
                <h1>&emsp;Q1.&emsp;お探しのラバーの種類は何ですか？</h1>
                <hr size="5" color="#B3424A">
                <div class='form-group'>
                    <div class="col-md-6 control-label">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="group01" name="group" value="1">
                            <label class="form-check-label" for="group01">裏ソフトラバー</lavel>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="group02" name="group" value="2">
                            <label class="form-check-label" for="group02">表ソフトラバー</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="group03" name="group" value="3">
                            <label class="form-check-label" for="group03">粒高ラバー</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="group04" name="group" value="4">
                            <label class="form-check-label" for="group04">アンチラバー</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class='question-2'>
                <hr size="5" color="#B3424A">
                <h1>&emsp;Q2.&emsp;予算はどれくらいですか？</h1>
                <hr size="5" color="#B3424A">
                <div class='form-group'>
                    <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="price01" name="price" value="1">
                                <label class="form-check-label" for="price01">気にしない</lavel>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="price02" name="price" value="2">
                                <label class="form-check-label" for="price02">9,000円 ～ </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="price03" name="price" value="3">
                                <label class="form-check-label" for="price03">7,000円 ～ </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="price04" name="price" value="4">
                                <label class="form-check-label" for="price04">4,000円 ～ </label>
                            </div>
                        </div>
                </div>
            </div>
            <div class='question-3'>
                <hr size="5" color="#B3424A">
                <h1>&emsp;Q3.&emsp;ラバーに何を求めていますか？</h1>
                <hr size="5" color="#B3424A">
                <div class='form-group'>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="feature01" name="feature" value="1">
                            <label class="form-check-label" for="feature01">スピード</lavel>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="feature02" name="feature" value="2">
                            <label class="form-check-label" for="feature02">回転</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="feaure03" name="feature" value="3">
                            <label class="form-check-label" for="feature03">バランス</label>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class='form-group'>
                <div class="col-md-offset-2 col-md-5">
                    <button type="submit" class="btn btn-primary btn-block">保存</button>
                </div>
            </div>
        </form>
        <script src="https://ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>