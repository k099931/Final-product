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
           .form-group {
              text-align:right;
           }
        </style>
    </head>
    <body>
        
        <form action='/' method="POST">
           @csrf
           <div class='form-group'>
               <lavel>ラバー名</lavel>
               <input type="text" class="form-control col-md-5" placeholder="検索したいラバー名を入力してください" name="name">
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
           
        <div class='rubbers'>
            @foreach ($rubbers as $rubber)
              <hr size="5" color="red">
              <h1>&emsp;{{ $rubber->maker }}</h1>
              <hr size="5" color="red">
                 @foreach ($rubbers as $rubber)
                 <div class='flex'>
                     <figure class="image"><img src="{{ $rubber->image }}" width="105" height="112"></figure>
                     <h2 class='right'>
                         <a href="/rubbers/{{ $rubber->id }}">・{{ $rubber->name }}</a>
                     </h2>
                 </div>
                 @endforeach
            @endforeach
        </div>
    </body>
</html>