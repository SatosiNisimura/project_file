@extends('layouts.helloapp')

@section('title', 'welcome! | BBS掲示板')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')

<div id="wrap"> 
    <div id="content">
        <p style="font-weight: bold; font-family: sans-serif;">投稿内容を編集する。</p><br>
        <form method="POST" action="{{ route('posts.update', ['post' => $post]) }}">
            @csrf
            @method('PUT')
            <fieldset class="mb-4">
                <div class="form-group">
                <p>タイトル</p>
                    <input
                        id="title"
                        name="title"
                        class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                        value="{{ old('title') ?: $post->title }}"
                        type="text"
                        style="width: 700px; height: 50px;  margin-bottom: 10px;"
                    >
                    @if ($errors->has('title'))
                        <p class="error">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
                <br>
                <div class="form-group">
                    <p>本文</p>
                    <textarea
                        id="body"
                        name="body"
                        class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}"
                        rows="4"
                        style="width: 700px; height: 150px; margin-bottom: 10px;"
                    >{{ old('body') ?: $post->body }}</textarea>
                    @if ($errors->has('body'))
                        <p class="error">
                            {{ $errors->first('body') }}
                        </p>
                    @endif
                </div>
                <br>
                <div style="display:inline-flex;">
               <!-- <div class="mt-5  text-right">-->
                    <button type="submit" class="btn btn-primary">
                        更新する
                    </button>&nbsp;
                </form>
                <form
                    style="display: inline-block;"
                    method="POST"
                    action="{{ route('posts.destroy', ['post' => $post]) }}"
                >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick='return confirm("本当に削除してもよろしいですか？");'>削除する</button>
                </form>&nbsp;
                <a class="btn btn-secondary" href="{{ route('top') }}">
                 戻る
                </a>
            </>
            </div>
        </fieldset>
    </div>
</div>
@endsection

@section('footer')
copyright 2020 Hikaruonline.
@endsection