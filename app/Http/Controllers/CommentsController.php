<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\AythRequest;
use App\Http\Requests\StoreRequest;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store(StoreRequest $request)
    {
        $params = $request->validate([
            'post_id' => 'required|exists:posts,id',
            'user_id' => 'required|exists:users,id',
            'body' => 'required|max:2000',
        ]);
        $post = Post::findOrFail($params['post_id']);
        $post->comments()->create($params);
        return redirect()->route('posts.show', ['post' => $post]);
    }
}
