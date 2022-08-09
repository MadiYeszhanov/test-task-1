@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
        @foreach($articles as $article)
            <div class="col-lg-4 d-flex align-items-stretch pb-3">
                <div class="card">
                    <img class="card-img-top" src="https://portolapilot.com/wp-content/uploads/2018/12/300x300.png" alt="Card image cap">
                    <div class="card-body">
                        <a href="{{route('articles.show',$article->id)}}"><h5 class="card-title">{{$article->title}}</h5></a>
                        <p class="card-text">
                            @if(strlen($article->text) > 100)
                                {{substr($article->text,0,100)}}...
                            @else
                                {{$article->text}}
                            @endif
                        </p>
                    </div>
                    <div class="card-footer text-muted">
                        Просмотров: {{$article->watch_count}}
                        Лайков: {{$article->like_count}}
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection
