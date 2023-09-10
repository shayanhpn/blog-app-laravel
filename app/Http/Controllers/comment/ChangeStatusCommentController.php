<?php

namespace App\Http\Controllers\comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class ChangeStatusCommentController extends Controller
{
    // Change Commnet Status --Example: Waiting->Agreed
    public function changeStatus(Request $request,Comment $id){
    $request->validate([
        'status' => ['required']
    ]);
    $status = $request->input('status');
    $id->status = filter_var($status, FILTER_VALIDATE_BOOLEAN); 
    $id->save();
    return back()->with('success','تغییر وضعیت با موفقیت انجام شد');
    }

    // Show Status Changes Page
    public function showChangeStatus(Comment $id){
        return view('admin.change-status-comment',['comment'=>$id]);
    }
}
