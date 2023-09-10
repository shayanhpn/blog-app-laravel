<?php

namespace App\Http\Controllers\contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Submit Contact Form
    public function submitContact(Request $request){
        $contactFields = $request->validate([
            'inputName' => ['required'],
            'inputEmail' => ['required','email'],
            'inputSubject' => ['required'],
            'inputMessage' => ['required'],
            'captcha' => ['required','captcha']
        ],[
            'inputName.required' => 'لطفا نام خود را وارد کنید',
            'inputEmail.required' => 'لطفا ایمیل خود را وارد کنید',
            'inputEmail.email' => 'لطفا ایمیل را صحیح وارد کنید',
            'inputSubject.required' => 'لطفا عنوان را وارد کنید',
            'inputMessage.required' => 'لطفا متن مورد نظر را وارد کنید',
            'captcha.required' => 'لطفا کد امینتی را وارد کنید',
            'captcha.captcha' => 'لطفا کد امنیتی را صحیح وارد کنید'
        ]);
        Contact::create([
            'fullname' => strip_tags($contactFields['inputName']),
            'email' => strip_tags($contactFields['inputEmail']),
            'title' => strip_tags($contactFields['inputSubject']),
            'content' => strip_tags($contactFields['inputMessage'])
        ]);
        return back()->with('success','فرم تماس شما با موفقیت ثبت گردید');
    }
}
