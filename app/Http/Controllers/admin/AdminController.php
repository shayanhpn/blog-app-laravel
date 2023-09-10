<?php

namespace App\Http\Controllers\admin;

use App\Models\Post;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //Admin Dashboard Elements
    public function showDashboardPage(){
        $posts = Post::orderBy('created_at','desc')->paginate(5);
        $allPosts = Post::all();
        $allUsers = User::all();
        $contacts = Contact::all();
        return view('admin.admin-dashboard',compact('posts','allPosts','allUsers','contacts'));
    }

    //View Register Page in Admin Panel
    public function showRegisterUserPage(){
        return view('admin.user-register-admin');
    }
}
