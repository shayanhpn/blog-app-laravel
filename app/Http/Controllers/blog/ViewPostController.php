<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class ViewPostController extends Controller
{
    // Show Single Post
    public function showSingleViewPost($slug){
        $post = Post::where('slug',$slug)->firstOrFail();
        $countStatus = Comment::where('status',true)->count();
        $commentsCount = Comment::all()->count();
        return view('blog.single-post',['post' => $post,'countstatus' => $countStatus,'commentsCount' => $commentsCount]);
    }
}
