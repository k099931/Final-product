
@section('content')
<div style="margin-top:50px;">
    <h1>検索結果</h1>
    @if(isset($rubbers))
        @foreach($rubbers as $rubber)
            <figure class="image"><img src="{{ $rubber->image }}" width="105" height="112"></figure>
            <h2 class='right'>
               <a href="/rubbers/{{ $rubber->id }}">・{{ $rubber->name }}</a>
            </h2>
        @endforeach
    @endforeach
    @endif
    @if(!empty($message))
    <div class="alert alert-primary" role="alert">{{ $message }}</div>
    @endif
</div>
@endsection
