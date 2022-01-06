<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ラケット一覧</title>
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
        <div class='ruckets'>
            @foreach ($ruckets as $rucket)
              <hr size="5" color="blue">
              <h1>&emsp;{{ $rucket->maker }}</h1>
              <hr size="5" color="blue">
                 @foreach ($ruckets as $rucket)
                 <div class='flex'>
                     <figure class="image"><img src="{{ $rucket->image }}" width="258" height="120"></figure>
                     <h2 class='right'>
                         <a href="/ruckets/{{ $rucket->id }}">・{{ $rucket->name }}</a>
                     </h2>
                 </div>
                 @endforeach
            @endforeach
        </div>    
    </body>
</html>