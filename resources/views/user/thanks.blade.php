@extends('layouts.helloapp')

@section('title', 'ユーザー登録 | BBS掲示板')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
<div id="wrap">
    <p>入力画面 -> 確認画面 -><span class="btn btn-danger" style="padding: 0px;"> 完了画面</span></p>
    <div id="content">
        <p style="font-weight: bolder; font-family: sans-serif;">ユーザー登録が完了しました。</p><br>
        <p><a class="btn btn-success" href="{{ route('user') }}">ログインする</a></p>
    </div>
</div>
@endsection

@section('footer')
copyright 2020 Hikaruonline.
@endsection
