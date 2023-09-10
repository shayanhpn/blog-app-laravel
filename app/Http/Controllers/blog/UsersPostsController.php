<?php

namespace App\Http\Controllers\blog;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersPostsController extends Controller
{
    // Show My Posts With User Settings in Admin Panel
    public function showUsersPosts(){
        if(auth()->check()){
            $posts = Post::where('user_id',auth()->user()->id)->paginate(5);
            return view('admin.show-users-posts',['posts' => $posts]);
        }
    }
}
