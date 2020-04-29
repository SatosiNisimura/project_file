@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <table>
        <form action="/user/add" method="post">
            {{ csrf_field() }}
            <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            <tr><th>email: </th><td><input type="text" name="email" value="{{old('email')}}"></td></tr>
            <tr><th>password: </th><td><input type="password" name="password" value="{{old('password')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="送信"></td></tr>
        </form>
    </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
