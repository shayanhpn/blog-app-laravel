<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Setting;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    // Main Page Options
    public function showMainPage(Request $request){
        $query = $request->input('search');
        $posts = Post::where('title','like',"%{$query}%")
                        ->orWhere('content','like',"%{$query}%")
                        ->paginate(10);
        $sliderPosts = Post::orderBy('created_at','desc')->paginate(5);
        return view('main-page',compact('sliderPosts','posts'));
    }

    // Show Contact Page
    public function showContactPage(){
        return view('pages.contact');
    }
    
    // Show About Page
    public function showAboutPage(){
        return view('pages.about');
    }
}
