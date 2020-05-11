<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\HelloRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $items = User::all();
        return view('user.index', ['items' => $items]);
    }

    public function post(HelloRequest $request)
    {
         $name = $request->input('name');
         $email = $request->input('email');
         $password = Hash::make($request->input('password'));

         return view('user.check', compact('name', 'email', 'password'));    //クリアした
    }

    public function thanks(Request $request)
    {
        $this->validate($request, User::$rules);
        $user = new User;
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form)->save();
        return view('user.thanks');
    }


    public function add(Request $request)
    {
        return view('user.add');
    }

    public function create(Request $request)
    {
        $this->validate($request,User::$rules);
        $user = new User();
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form)->save();
        return redirect('/user');
    }
}
