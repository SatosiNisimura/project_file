@extends('layouts.helloapp')

@section('title', 'ユーザー登録 | BBS掲示板')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    <div id="wrap">
        <p><span class="btn btn-danger" style="padding: 0px;">入力画面</span> -> 確認画面 -> 完了画面</p>
        <div id="content">
    		    <p style="font-weight: bolder; font-family: sans-serif;">次のフォームに必要事項をご記入ください。</p>
            @if (count($errors) > 0)
                <p>入力に問題があります。再入力してください。</p>
            @endif<br>
		        <form action="/user" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <p>氏名<span class="btn btn-danger" style="padding: 4px;">必須</span></p>
        		    <dd><input type="text" name="name" size="35" maxlength="255" value="{{old('name')}}" /></dd>
                @if ($errors->has('name'))
                    <tr><th></th><td><p class="error">{{$errors->first('name')}}</P></td></tr>
                @endif<br>
        		    <p>メールアドレス<span class="btn btn-danger" style="padding: 4px;">必須</span></p>
        		    <dd><input type="text" name="email" size="35" maxlength="255" value="{{old('email')}}" /></dd>
                @if ($errors->has('email'))
                    <tr><th></th><td><p class="error">{{$errors->first('email')}}</p></td></tr>
                @endif<br>
        		    <p>パスワード<span class="btn btn-danger" style="padding: 4px;">必須</span></p>
        		    <dd><input type="password" name="password"  size="20" maxlength="20" value="{{old('password')}}" /></dd>
                @if ($errors->has('password'))
                    <tr><th></th><td><p class="error">{{$errors->first('password')}}</p></td></tr>
                @endif<br>
        		    <div><input type="submit" class="btn btn-primary" value="入力内容を確認する" /></div>
    		    </form>
        </div>
    </div>
@endsection

@section('footer')
copyright 2020 Hikaruonline.
@endsection
