<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function addComment(Request $request) {
        $userId = $request->user_id;
        $postId = $request->post_id;
        $commentDesc = $request->comment;
        // return response()->json($userId);
       
        $comment = Comment::create([
            'user_id' => $userId,
            'post_id' => $postId,
            'comment' => $commentDesc
        ]);
        return response()->json($comment);
    }

    public function getComments($id) {
        $comments = Comment::where('post_id' , $id)->get();
        return response()->json($comments);
    }

    public function userInfo($id) {
        $comment = Comment::find($id);
        $user = User::find($comment->user_id);
        return response()->json($user);
    }
}
