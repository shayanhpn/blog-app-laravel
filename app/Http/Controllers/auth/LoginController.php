<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show Login Page
    public function showLoginPage(){
        if(!auth()->check()){
            return view('auth.user-login');
        }else{
            return redirect()->route('admin.dashboard')->with('warning','شما قبلا وارد شده اید');
        }
    }
    
    // Login User Function
    public function loginFuction(Request $request){
        $incommingFields = $request->validate([
            'loginemail' => ['required','email'],
            'loginpassword' => ['required'],
            'captcha' => ['required','captcha']
        ],[
            'loginemail.required' => 'وارد کردن ایمیل الزامی است',
            'loginemail.email' => 'لطفا ایمیل صحیح وارد کنید',
            'loginpassword.required' => 'وارد کردن رمزعبور الزامی است',
            'captcha.required' => 'وارد کردن کد امنیتی الزامی می باشد',
            'captcha.captcha' => 'لطفا کد امنیتی صحیح را وارد کنید'
        ]);
        if(Auth::attempt(['email' => $incommingFields['loginemail'],'password' => $incommingFields['loginpassword'] ])){
            session()->regenerate();
            return redirect()->route('admin.dashboard')->with('success','با موفقیت وارد شدید');
        }else{
            return redirect()->route('login')->with('danger','نام کاربری / رمز عبور اشتباه می باشد');
        }

    }
}
