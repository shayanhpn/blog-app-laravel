<?php

namespace App\Http\Controllers\comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class ShowCommentsController extends Controller
{
    // Show All Comments
    public function showAllComments(){
        $comments = Comment::orderBy('created_at' ,'desc')->paginate(10);
        return view('admin.show-all-comments',['comments' => $comments]);
    }
}
