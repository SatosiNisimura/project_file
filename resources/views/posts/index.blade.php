@extends('layouts.helloapp')
<style>
    .pagination {font-size: 11pt;}
    .pagination li {display: inline-block;}
    tr th a:link {color: white;}
    tr th a:visited {color: white;}
    tr th a:hover {color: white;}
    tr th a:active {color: white;}
    p.display {display: inline-block;}
</style>
@section('title', 'Person.Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
<div id="wrap">

    <div id="content">
        @if (Auth::check())
            <div style="text-align: right"><a class="btn btn-success" style="padding: 12px;" href="/auth/logout">ログアウト</a></div>
        @else
            <div style="text-align: right"><a class="btn btn-success" style="padding: 12px;" href="/hello/auth">ログイン</a></div>
        @endif
        @if (Auth::check())
            <p style="font-weight: bold;">こんにちは、{{$user->name}}さん。</p>
            <p><a class="btn btn-lg btn-primary" style="padding: 10px; padding-left: 70px; padding-right: 70px;" href="{{ route('posts.create') }}">
                投稿を新規作成する 
            </a></p>
            <form action="/posts/find" method="post">
                @csrf    
                <div style="display:inline-flex;">
                <input type="text" class="form-control" style="width: 305px; height: calc(2.5rem + 2px);" name="input" placeholder="search" value="{{$input}}">
                <button type="submit" class="btn btn-primary btn-secondary">
                <i class="fas fa-search"></i>
                </button>
                </div>
            </form>
        @else
            <p style="font-weight: bold;">こんにちはゲストさん。</p>
        @endif
        <br>
        <div class="container mt-4">
            @foreach ($posts as $post)
                <div class="card mb-4">
                    <div class="card-header">
                        [{{ $post->id }}]&ensp;
                        @if (Auth::check())
                            @if (Auth::id() == $post['user_id'])
                            Your
                            @endif
                        @else
                        @endif
                        <br>{{ $post->title }}
                    </div><br>
                    <div class="card-body">
                        <p class="card-text" style="font-size: 15px;">
                            {!! nl2br(e(str_limit($post->body, 300))) !!}
                        </p>
                        <div class="mb-4 text-right">
                        <p>[<a class="card-link" href="{{ route('posts.show', ['post' => $post]) }}">
                            続きを読む
                            </a>]</p>
                        @if (Auth::check())
                            @if (Auth::id() == $post['user_id'])
                               <p> [<a class="card-link" href="{{ route('posts.edit', ['post' => $post]) }}">
                                    編集する
                                </a>]
                            </p>
                            @endif
                        @else
                        @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="mr-2">
                        投稿日時 {{ $post->created_at->format('Y.m.d') }}
                    </span>
                    @if ($post->comments->count())
                        <span class="badge badge-primary">
                            コメント {{ $post->comments->count() }}件
                        </span>
                    @endif
                </div>
                <br><br>
            @endforeach
            <div class="d-flex justify-content-center mb-5">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
copyright 2020 Hikaruonline.
@endsection