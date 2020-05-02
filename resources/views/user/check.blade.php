@extends('layouts.helloapp')

@section('title', 'ユーザー登録 | BBS掲示板')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
<div id="wrap">
    <p>入力画面 -><span class="btn btn-danger" style="padding: 0px;">確認画面</span> -> 完了画面</p>
    <div id="content">
	      <p style="font-weight: bolder; font-family: sans-serif;">正しく入力されました！</p>
  		  <p>記入した内容を確認して、「登録する」ボタンを記入してください。</p><br>
  		  <form action="user/thanks" method="post">
            {{ csrf_field() }}
  		      <dl>
  		          <p style="font-weight: bold; font-family: sans-serif;">ニックネーム</p>
  		          <dd><input name="name" value="{{$name}}" type="hidden">&ensp;{{$name}}</dd><br>
  		          <p style="font-weight: bold; font-family: sans-serif;">メールアドレス</p>
  		          <dd><input name="email" value="{{$email}}" type="hidden">&ensp;{{$email}}</dd><br>
  		          <p style="font-weight: bold; font-family: sans-serif;">パスワード</p>
  		          <dd>【表示されません】<input name="password" value="{{$password}}" type="hidden"></dd><br>
  		      </dl>
  		      <div><input type="submit" class="btn btn-primary" value="登録する" /> &thinsp; <a href="user" class="btn btn-secondary">書き直す</a></div>
  	    </form>
    </div>
</div>
@endsection

@section('footer')
copyright 2020 Hikaruonline.
@endsection
