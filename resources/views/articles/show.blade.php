@extends('layouts.app')
@section('head-content')
    <script>
        let article_id = {!! $article->id !!};
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
@section('content')
    <div class="container">
        <h1>{{$article->title}}</h1>
        <h4>Просмотров: <span id="watched">{{$article->watch_count}}</span></h4>
        <button id="like_click" type="button pb-5" class="btn btn-success">Лайков: <span id="likes">{{$article->like_count}}</span></button>

        <div class="row mt-2">
            <div class="col-4">
                <img src="https://portolapilot.com/wp-content/uploads/2018/12/300x300.png">
            </div>
            <div class="col-8">{{$article->text}}</div>
        </div>

        <h4>Теги</h4>
        @foreach($article->tags as $tag)
            <a href="#" class="badge badge-primary">{{$tag->name}}</a>
        @endforeach
    </div>
@endsection
