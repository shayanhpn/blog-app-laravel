<?php

namespace App\Http\Controllers\comment;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewSingleCommentController extends Controller
{
    // Show Single Comment in Admin Panel
    public function showSingleComment(Comment $id){
        return view('admin.view-comment',['comment' =>$id]);
    }
}
