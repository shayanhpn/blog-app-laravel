<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Http\Request;

class CreatePostController extends Controller
{
    // Show Create Post Page With Select Category Option
    public function showCreatePostPage(){
        $cats = Category::all();
        return view('blog.create-post',['cats' => $cats]);
    }

    // Create Post Function In Admin Panel
    public function createPostFunction(Request $request){
        $request->validate([
            'post_title' => ['required'],
            'post_content' => ['required'],
            'post_image' => ['nullable','image','mimes:jpeg,png,jpg,gif','max:2048'],
            'post_category' => ['nullable']
        ],[
            'post_image.image' => 'لطفا قالب فایل را عکس انتخاب کنید',
            'post_image.mimes' => 'لطفا از پسوند های مجاز jpeg,png,jpg,gif استفاده کنید',
            'post_image.max' => 'حداکثر اندازه مجاز اندازه فایل 2 مگابایت می باشد',
            'post_title.required' => 'وارد کردن عنوان الزامی می باشد'
        ]);

        $post = new Post();
        $post->title = strip_tags($request->input('post_title'));
        $post->content = $request->input('post_content');
        $post->category = strip_tags($request->input('post_category'));
        if($request->has('post_image')){
            $fileName = 'post_images/'. time() .'.'. $request->file('post_image')->getClientOriginalExtension();
            $request->post_image->move(public_path('post_images'),$fileName);
            $post->indexImage = $fileName;
        }
        $post->user_id = auth()->user()->id;
        $post->created_at = Verta::now();
        $post->updated_at = Verta::now();
        $post->save();
        return redirect()->route('admin.view-posts')->with('success','نوشته با موفقیت ایجاد گردید');

    }
}
