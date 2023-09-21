<?php

namespace App\Http\Controllers\blog;

use App\Models\Post;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
use App\Http\Controllers\Controller;

class UpdatePostController extends Controller
{
    // Show Update Post Page -- Admin Panel
    public function showUpdatePostPage($slug){
        $id = Post::where('slug',$slug)->firstOrFail();
        return view('blog.update-post',['post' => $id]);
    }
    
    // Update Post Function -- Admin Panel
    public function updatePostFunction(Request $request, Post $post){
        $updatePostFields = $request->validate([
            'post_title' => ['required'],
            'post_content' => ['required'],
            'post_image' => ['nullable','image','mimes:jpeg,png,jpg,gif','max:2048'],
            'post_category' => ['nullable'],
        ]);
        if(auth()->user()->id == $post->user_id){
            $post->title = strip_tags($updatePostFields['post_title']);
            $post->content = $updatePostFields['post_content'];
            $post->category = strip_tags($updatePostFields['post_category']);
            if($request->hasFile('post_image')){
                $fileName = 'post_images/'. time() .'.'. $request->file('post_image')->getClientOriginalExtension();
                $request->post_image->move(public_path('post_images'),$fileName);
                $post->indexImage = $fileName;
            }
            $post->updated_at = Verta::now();
            $post->save();
            return redirect()->route('admin.view-posts')->with('success','نوشته مورد نظر با موفقیت بروزرسانی شد');
        }
        return back()->with('danger','شما دسترسی به این عملیات را ندارید');
    }
}
