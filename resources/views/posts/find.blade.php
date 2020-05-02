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
@section('title', 'welcome! | BBS掲示板')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')

<div id="wrap">
    <div id="content">
        <br>
        <h2 class="h5 mb-4" style="font-size: 25px; font-weight: bolder; font-family: sans-serif;">結果：{{$input}}</h2><br><br>
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
                            <p>[<a class="card-link" href="{{ route('posts.edit', ['post' => $post]) }}">
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
        <br>
        <a class="btn btn-secondary" href="{{ route('top') }}">
            戻る
        </a>
    </div>
</div>

@endsection

@section('footer')
copyright 2020 Hikaruonline.
@endsection