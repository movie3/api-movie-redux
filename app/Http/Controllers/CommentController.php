<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function addComment(Request $request){
        $userId = $request->user_id;
        $user = User::find($userId);
    }
}
