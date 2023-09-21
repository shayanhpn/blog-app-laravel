<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class DeletePostController extends Controller
{

    // Delete Post Method in Admin Panel
    public function deletePost(Post $id){
        if(auth()->user()->id == $id->user_id){
            $id->delete();
            return redirect()->route('admin.view-posts')->with('success','نوشته مورد نظر با موفقیت حذف گردید');
        }
        return back()->with('danger','شما دسترسی به این عملیات را ندارید');
    }

    // Show Delete Post Page// ASK the user for delete or no
    public function showDeletePostPage(Post $id){
        return view('blog.delete-post',['post' => $id]);
    }
}
