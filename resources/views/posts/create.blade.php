@extends('layouts.helloapp')

@section('title', 'welcome! | BBS掲示板')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
<div id="wrap">
   <!-- <div id="head">
        <h1>ひとこと掲示板</h1>
    </div>-->
    <div id="content">
        <form method="POST" action="{{ route('posts.store') }}">
        @csrf
            <p style="font-weight: bold; font-family: sans-serif;">投稿を新規作成する。</p>
            <br>
            <fieldset class="mb-4">
                <div class="form-group">
                <p >タイトル</p>
                    <input
                        id="title"
                        name="title"
                        class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                        value="{{ old('title') }}"
                        type="text"
                        style="width: 700px; height: 50px; margin-bottom: 10px;"

                    >
                    @if ($errors->has('title'))
                        <p class="error">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
                <br>
                <div class="form-group">
                <p >本文</p>
                    <textarea
                        id="body"
                        name="body"
                        class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}"
                        rows="4"
                        style="width: 700px; height: 200px;  margin-bottom: 10px;"
                    >{{ old('body') }}</textarea>
                    @if ($errors->has('body'))
                        <p class="error">
                            {{ $errors->first('body') }}
                        </p>
                    @endif
                </div>
                
                <button type="submit" class="btn btn-primary">
                    投稿する
                </button>
                <a class="btn btn-secondary" href="{{ route('top') }}">
                    戻る
                </a>
            </fieldset>
        </form>
    </div>
</div>
@endsection

@section('footer')
copyright 2020 Hikaruonline.
@endsection
