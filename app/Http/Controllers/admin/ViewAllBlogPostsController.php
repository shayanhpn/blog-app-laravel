<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ViewAllBlogPostsController extends Controller
{   
    // View All Blog Posts
    public function showAllBlogPosts(){
        $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('admin.view-all-posts',['posts' => $posts]);
    }
}
