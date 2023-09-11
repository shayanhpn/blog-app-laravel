<?php

namespace App\Http\Controllers\comment;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    // Create Comment Function
    public function createComment(Request $request){
        $commentFields = $request->validate([
            'name' => ['required'],
            'email' => ['required','email'],
            'content' => ['required'],
            'captcha' => ['required','captcha','max:500']
 
        ],[
            'name.required' => 'وارد کردن نام الزامی می باشد',
            'email.required' => 'وارد کردن ایمیل الزامی می باشد',
            'email.email' => 'لطفا ایمیل صحیح وارد کنید',
            'content.required' => 'وارد کردن محتوا الزامی می باشد',
            'captcha.required' => 'وارد کردن کد امنیتی الزامی می باشد',
            'captcha.captcha' => 'لطفا کد امنیتی صحیح را وارد کنید',
            'captcha.max' => 'شما از حداکثر مجاز برای دریافت ورودی استفاده کردید'
        ]);

        $comment = new Comment;
        $comment->name = strip_tags($commentFields['name']);
        $comment->email = strip_tags($commentFields['email']);
        $comment->content = strip_tags($commentFields['content']);
        $comment->post_id = strip_tags($commentFields['post_id']);
        $comment->save();

        return back()->with('success','نظر شما با موفقیت ثبت شد');
    }
}
