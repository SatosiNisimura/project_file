@extends('layouts.helloapp')

@section('title', 'Person.Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    <!--<div id="wrap">
        <h1>ひとこと掲示板</h1>
    </div>-->
    <div id="content">
        <section>
            <p style="font-weight: bold;">投稿のタイトル</p>
            <p class="mb-5">
                {!! nl2br(e($post->title)) !!}
            </p><br>
            <p style="font-weight: bold;">投稿の本文</p>
            <p class="mb-5" style="font-size: 15px;">
                {!! nl2br(e($post->body)) !!}
            </p><hr>
            <br>
            <p style="font-weight: bold;">投稿に対してコメントする</p>
            <br>
            <form class="mb-4" method="POST" action="{{ route('comments.store') }}">
                @csrf
                <input
                    name="post_id"
                    type="hidden"
                    value="{{ $post->id }}"
                >
                @if (Auth::check())
                <input
                    name="user_id"
                    type="hidden"
                    value="{{ $user->id }}">
                @else
                @endif
                <div class="form-group">
                    @if (Auth::check())
                    <p>本文</p>
                    <textarea
                        id="body"
                        name="body"
                        class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}"
                        rows="4"
                        style="width: 700px; height: 150px;  margin-bottom: 10px;"
                    >{{ old('body') }}</textarea><br>
                    @else
                    <p>コメントするには会員登録が必要です。</p><br>
                    <p>  <a class="btn btn-secondary" href="{{ route('top') }}">
                          戻る
                      </a></p>
                    @endif
                    @if ($errors->has('body'))
                        <p class="error">
                            {{ $errors->first('body') }}
                        </p>
                    @endif
                </div>
                <div class="mt-4">
                      @if (Auth::check())
                    <button type="submit" class="btn btn-primary">
                        コメントする
                    </button>
                    <a class="btn btn-secondary" href="{{ route('top') }}">
                        戻る
                    </a>
                    @else

                    @endif
                </div>
            </form><br>
            <br>
            @forelse($post->comments as $comment)
                <div class="border-top p-4">
                    <time class="text-secondary">
                        {{ $comment->created_at->format('Y.m.d H:i') }}
                    </time>
                    <p class="mt-2">
                        {!! nl2br(e($comment->body)) !!}
                    </p>
                </div>
            @empty
                <p>コメントはまだありません。</p>
            @endforelse
        </section>
    </div>
</div>
@endsection

@section('footer')
copyright 2020 Hikaruonline.
@endsection