<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\CreateRequest;
use App\Http\Requests\UpdateRequest;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class Postscontroller extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        $param = ['user' => $user, 'posts' => $posts, 'input' => ''];
        return view('posts.index', $param);
    }

    public function post(Request $request)
    {
        return redirect()->route('top');
    }

    public function create(Request $request)
    {
        $posts = Post::All();
        return view('posts.create', ['posts' => $posts]);
    }

    public function store(CreateRequest $request)
    {
        $post = $request->validate([
            'title' => 'required|max:50',
            'body' => 'required|max:2000',
        ]);
        $post = new Post;
        $post->user_id = $request->user()->id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect()->route('top');
    }

    public function show($post_id, Request $request)
    {
        $user = Auth::user();
        $post = Post::findOrFail($post_id);
        return view('posts.show', [
            'user' => $user,
            'post' => $post,
        ]);
    }

    public function edit($post_id)
    {
        $post = Post::findOrFail($post_id);
        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    public function update($post_id, UpdateRequest $request)
    {
        $params = $request->validate([
            'title' => 'required|max:50',
            'body' => 'required|max:2000',
        ]);

        $post = Post::findOrFail($post_id);
        $post->fill($params)->save();
        return redirect()->route('top');
    }

    public function destroy($post_id, Request $request)
    {
        $post = Post::findOrFail($post_id);
        \DB::transaction(function () use ($post) {
            $post->comments()->delete();
            $post->delete();
        });
        return redirect()->route('top');
    }

    public function find(Request $request)
    {
        $posts = Post::All();
        return view('posts.find',['input' => '', 'posts' => $posts]);
    }

    public function search (Request $request)
    {
        $posts = Post::where('title', 'like', "%{$request->input}%")
            ->orwhere('body', 'like', "%{$request->input}%")
            ->get();
        $param = ['input' => $request->input, 'posts' => $posts];
        return view('posts.find', $param);
    }
    
}
