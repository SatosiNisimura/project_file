@extends('layouts.helloapp')

@section('title', 'ユーザー認証')

@section('menubar')
    @parent
    ユーザー認証ページ
@endsection

@section('content')
<!--<p>{{$message}}</p>-->
<div id="wrap">
  
    <div id="content">
        <div id="lead"><br>
            <p style="text-align: center; font-size: 28px; font-weight: bolder;">{{$message}}</p><br>
            <hr><br>
        </div>
        <table>
            <form action="/" href="{{ route('user') }}" method="post">
                {{ csrf_field() }}
                <dl>
                    <p style="text-align: center;">メールアドレス</p>
                    <dd style="text-align: center;">
                        <input type="text" name="email" size="35" maxlength="255" value="{{old('email')}}"/>
                    </dd>
                    @if ($errors->has('email'))
                        <p class="error" style="text-align: center;">{{$errors->first('email')}}</p>
                    @endif<br>
                    <p style="text-align: center;">パスワード</p>
                    <dd style="text-align: center;">
                        <input type="password" name="password" size="35" maxlength="255"/>
                    </dd>
                    @if ($errors->has('password'))
                        <p class="error" style="text-align: center;">{{$errors->first('password')}}</p>
                    @endif<br>
                </dl>
                <div style="display:inline-flex;">
                <div><input type="submit" class="btn btn-success" style="padding: 14px;" value="ログイン"/></div>
            </form>&emsp;
            <form action="/posts/guest" method="post">
                {{ csrf_field() }}
                <div><input type="submit" class="btn btn-success" style="padding: 14px;" value="ログインせず利用する"/></div>
            </form>
            </div>
            <br><br><br>
            <p style="font-size: 18px;">シーディングデータ<br>
                メールアドレス：laravel@example.com
                パスワード：111111
            </p><br>
        </div>
        </table>
    </div>
</div>
@endsection

@section('footer')
copyright 2020 Hikaruonline.
@endsection
