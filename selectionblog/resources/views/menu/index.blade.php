<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TOP</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
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
            
            .heading {
                display: block;
                text-align: center;
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
                    {{--　ハンバーガーメニュー　--}}
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
        <div class="heading">
            {{--　トップ画像　--}}
            <figure class="image"><img src="https://selectionblog.s3.us-east-2.amazonaws.com/%E8%A6%8B%E5%87%BA%E3%81%97%E7%94%BB%E5%83%8F.png" width="100%" height="50%"></figure>
        </div>
            <div class="explanation">
                <hr size="5" color="#4B0082">
                    <h1>・アプリ説明</h1>
                <hr size="5" color="#4B0082">
                <h2>
                    本アプリを作成した経緯としては、卓球の用具について知識の無い初心者の方や、若い世代の方でも、自分に合った用具を選ぶことを可能にするアプリをあればいいな、との考えから作成を
                    始めました。<br>
                    機能としては、「ラバー検索機能」や「ラケット検索機能」、「コメント機能」、「選定機能」、「お勧め機能」などがあります。
                </h2><br>
            </div>
            <div class="how-to-use">
                <hr size="5" color="#4B0082">
                    <h1>・アプリ使用方法</h1>
                <hr size="5" color="#4B0082">
                <h2>
                    画面右上のメニューバーから、使用したい機能をクリックし、その画面へ遷移してください。<br>
                    そのあとは、自分に合った用具を探すだけです。
                </h2><br>
                <hr size="5" color="#4B0082">
                    <h1>・ラバー一覧画面</h1>
                <hr size="5" color="#4B0082">
            </div>
            <h2>
                本WEBアプリのデータベースに存在するラバーを一覧として表示しています。<br>
                また、左上の検索バーから、「ラバー名」、「価格」の条件からラバーを検索できます。<br>
                気になるラバーのラバー名をクリックすると、そのラバーの詳細情報を確認できます。<br>
                ラバーの詳細情報を確認する画面では、ログインしていただいた方に限り、星5つ中星いくつか選択し、コメントを残すことで、そのラバーについて
                評価することができます。<br>
                硬度は、中国硬度で表示しています。<br>
                ラバーの基本情報については、メーカーカタログを参照しています。
            </h2><br>
            <hr size="5" color="#4B0082">
                <h1>・ラケット一覧画面</h1>
            <hr size="5" color="#4B0082">
            <h2>
                本WEBアプリのデータベースに存在するラケットを一覧として表示しています。<br>
                また、左上の検索バーから、「ラケット名」、「価格」の条件からラケットを検索できます。<br>
                気になるラケットのラケット名をクリックすると、そのラケットの詳細情報を確認できます。<br>
                ラケットの詳細情報を確認する画面では、ログインしていただいた方に限り、星5つ中星いくつか選択し、コメントを残すことで、そのラケットについて
                評価することができます。<br>
                ラケットの基本情報については、メーカーカタログを参照しています。
            </h2><br>
            <hr size="5" color="#4B0082">
                <h1>・選定画面</h1>
            <hr size="5" color="#4B0082">
            <h2>
                本WEBアプリのデータベースに存在するラケット、ラバーの相性を表示します。自分の使ってみたいラケットとラバーの組み合わせで検索してください。<br>
                Q1とQ2、Q3全てのテキストボックスを正しい表記で入力し、画面下部「保存ボタン」をクリックすることで、結果が表示されます。<br>
                選定結果では、入力されたラケット、ラバーの性能数値を用いて、総合性能数値を算出し、その数値に基づいたランクを表示します。<br>
                さらに、こういう人向けというタイトルで、入力されたラケットやラバーの特徴から、お勧めしたい方の情報を表示します。
            </h2><br>
            <hr size="5" color="#4B0082">
                <h1>・お勧め画面</h1>
            <hr size="5" color="#4B0082">
            <h2>
                入力されたQ1とQ2、Q3の入力内容から、本WEBアプリのデータベースに存在するお勧めラバーを表示します。各質問項目は全て「単一選択」です。<br>
                現在のアプリでは、データベース上に裏ソフトラバー以外が存在しないので、裏ソフトラバー以外のラバーをお勧めすることはできません。<br>
                今後、データベースを追加していこうと思います。追加をお待ちください。
            </h2><br>
            <hr size="5" color="#4B0082">
                <h1>・注意</h1>
            <hr size="5" color="#4B0082">
            <h2>
                選定画面では、本アプリのデータベース上に入っている名称を入力してください。<br>
                半角スペースの有無や、つづりも、全くおなじように入力しないと正しく表示されません。<br>
                選定画面を使用する前に、ラバーやラケット一覧画面を参照してください。
            </h2><br>
            <script src="https://ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
    </body>
</html>