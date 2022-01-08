<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>検索結果</title>
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
        <div style="margin-top:50px;">
            <h1>検索結果</h1>
            @if(isset($ruckets))
            <div class='flex'>
                @foreach($ruckets as $rucket)
                    <figure class="image"><img src="{{ $rucket->image }}" width="258" height="120"></figure>
                    <h2 class='right'>
                       <a href="/ruckets/{{ $rucket->id }}">・{{ $rucket->name }}</a>
                    </h2>
                @endforeach
            </div>
            @endif
            @if(!empty($message))
            <div class="alert alert-primary" role="alert">{{ $message }}</div>
            @endif
        </div>
    </body>
</html>