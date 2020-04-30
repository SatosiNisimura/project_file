<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\AuthRequest;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HelloController extends Controller
{

    public function getAuth(Request $request)
    {
        $param = [
            'message' => 'ログイン',
        ];
        return view('hello/auth', $param);
    }

    public function postAuth(AuthRequest $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $msg = 'ログインしました。（' . Auth::user()->name . '）';
            return redirect('posts');
        } else {
            $msg = 'ログインに失敗しました。';
        }
          return view('hello/auth', ['message' => $msg]);
    }

    public function logout(Request $request)
    {
        $items = NULL;
        Auth::logout();
        return view('hello.index');
    }


}
