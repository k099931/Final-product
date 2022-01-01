<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ラバー一覧</title>
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
        </style>
    </head>
    <body>
        <div class='rubbers'>
           <hr size="5" color="red">
           <h1>&emsp;メーカー名</h1>
           <hr size="5" color="red">
              <div class='flex'>
                  <figure class="image"><img src="https://selectionblog.s3.us-east-2.amazonaws.com/Rubber/Fastarc+G-1.png" width="105" height="112"></figure>
                  <h2 class='right'>・ラバー名</h2>
              </div>
        </div>    
    </body>
</html>