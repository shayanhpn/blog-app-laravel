<?php

namespace App\Http\Controllers\newsletter;

use App\Models\NewsLetter;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class NewsLetterController extends Controller
{
    // Submit NewsLetter Function
    public function submitNewsLetter(Request $request){
        $newsField = $request->validate([
            'email' => ['required','email',Rule::unique('news_letters')]
        ],[
            'email.required' => 'وارد کردن ایمیل الزامی می باشد',
            'email.unique' => 'این ایمیل قبلا ثبت نام شده است'
        ]);
        NewsLetter::create([
            'email' => strip_tags($newsField['email'])
        ]);
        return back()->with('success','شما با موفقیت عضو خبرنامه شدید');
    }
}
