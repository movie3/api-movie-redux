<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add(Request $request)
    {
        $userId = $request->user_id;
        $postDesc = $request->post;
        // return response()->json($userId);

        $post = Post::create([
            'user_id' => $userId,
            'post' => $postDesc
        ]);
        return response()->json($post);
    }

    public function getPosts()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return response()->json($posts);
    }

    public function userInfo($id)
    {
        $post = Post::find($id);
        $user = User::find($post->user_id);
        return response()->json($user);
    }

    public function getUserPost($user_id)
    {
        $post = Post::where('user_id', $user_id)->get();
        return response()->json($post);
    }
}
