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
           .form-group {
              text-align:right;
           }
        </style>
    </head>
    <body>
        <form action='/' method="POST">
           @csrf
           <div class='form-group'>
               <lavel>ラケット名</lavel>
               <input type="text" class="form-control col-md-5" placeholder="検索したいラケット名を入力してください" name="name">
           </div>
           <div class='form-group'>
               <lavel>価格</lavel>
               <input type="text" class="form-control col-md-5" placeholder="価格を入力してください" name="price" value="{{ old("name") }}">
           </div>
           
           <div class='form-group'>
               <lavel>価格の条件</lavel>
               <select class="form-control col-md-5" name="price_condition">
                   <option selected value="0">選択 ．．．</option>
                   <option value="1">以上</option>
                   <option value="2">以下</option>
               </select>
           </div>
           
           <div class='form-group'>
              <button type="submit">検索</button>
           </div>
        
        
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