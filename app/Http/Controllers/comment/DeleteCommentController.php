<?php

namespace App\Http\Controllers\comment;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteCommentController extends Controller
{
    // Delete Comment Function Handled By Admin
    public function deleteComment(Comment $id){
        $id->delete();
        return redirect()->route('admin.all-comments')->with('success' ,'نظر مورد نظر با موفقیت حذف گردید');
    }

    // Show Delete Page Function
    public function showDeletePage(Comment $id){
        return view('admin.delete-comment', ['comment' => $id]);
    }
}
