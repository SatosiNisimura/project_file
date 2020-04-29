@extends('layouts.helloapp')

@section('title', 'Person.Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
<div id="wrap">
    <p>入力画面 -> 確認画面 -><span class="btn btn-danger" style="padding: 0px;"> 完了画面</span></p>
    <div id="content">
        <p style="font-weight: bolder;">ユーザー登録が完了しました。</p><br>
        <p><a href="/hello/auth" class="btn btn-success">ログインする</a></p>
    </div>
</div>
@endsection

@section('footer')
copyright 2020 Hikaruonline.
@endsection
