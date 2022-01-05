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
        </style>
    </head>
    <body>
        <h1>{{ $rubber->maker }}&emsp;/&emsp;{{ $rubber->name }}</h1>
        <div class='flex'>
            <figure class='image'><img src="{{ $rubber->image }}" width="280" height="300"></figure>
            <span style="border-bottom: solid 2px blue;">
                <h2 class='right'>
                スピード：{{ $rubber->speed }}<br><br>
                回転：{{ $rubber->spin }}<br><br>
                硬度：{{ $rubber->hardness}}<br><br>
                価格：{{ $rubber->price}}
               </h2>
            </span>
        </div>
        <div class='evaluation'>
            <span style="border-bottom: solid 2px blue;">
                <h1>皆の評価</h1>
            </span>
            <form action="/rubbers" method="POST">
                @csrf
                <div class="comment">
                    <h2>コメント</h2>
                    <textarea name=rubbercomment["comment"] placeholder="素晴らしいラバーです。"></textarea>
                </div>
                <input type="submit" value="保存"/>
            </form>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>