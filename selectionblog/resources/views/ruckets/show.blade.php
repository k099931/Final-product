<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ラケット詳細</title>
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
        <hr size="5" color="blue">
        <h1>{{ $rucket->maker }}&emsp;/&emsp;{{ $rucket->name }}</h1>
        <hr size="5" color="blue">
        <div class='flex'>
            <figure class='image'><img src="{{ $rucket->image }}" width="516" height="240"></figure>
            <span style="border-bottom: solid 2px blue;">
                <h2 class='right'>
                反発：{{ $rucket->repulsion }}<br><br>
                打球感：{{ $rucket->feeling }}<br><br>
                重量：{{ $rucket->weight }}<br><br>
                価格：{{ $rucket->price}}
               </h2>
            </span>
        </div>
        <div class='evaluation'>
            <span style="border-bottom: solid 2px blue;">
                <hr size="5" color="blue">
                <h1>皆の評価</h1>
                <hr size="5" color="blue">
                <div class="comments">
                    @foreach ($rucketcomments as $rucketcomment)
                       <div class="comment">
                           @if( $rucketcomment->rucket_id === $rucket->id )
                              <h2 class="comment">{{ $rucketcomment->comment }}</h2>
                              <p class="created">{{ $rucketcomment->created_at }}</p><br>
                           @endif
                       </div>
                    @endforeach
                </div>
            </span>
            <form action="/ruckets" method="POST">
                @csrf
                <div class="create">
                    <hr size="5" color="blue">
                    <h2>コメント</h2>
                    <hr size="5" color="blue">
                    <textarea name="rucketcomment[comment]" placeholder="素晴らしいラケットです。">{{ old('rucketcomment.comment') }}</textarea>
                    <p class="comment_error" style="color:red">{{ $errors->first('rucketcomment.comment') }}</p>
                    <input type="hidden" name="rucketcomment[rucket_id]" value="{{ $rucket->id }}">
                </div>
                <input type="submit" value="保存"/>
            </form>
        </div>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>