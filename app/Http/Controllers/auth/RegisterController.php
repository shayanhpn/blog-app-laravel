<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class RegisterController extends Controller
{
    // Show Register Page -- SignUp
    public function showRegisterPage(Request $request){
        return view('auth.user-register');
    }

    // Register User Function 
    public function registerFunction(Request $request){
        $incommingFields = $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','confirmed','min:6'],
            'captcha' => ['required','captcha']
        ],[
            'firstname.required' => 'وارد کردن نام الزامی است',
            'lastname.required' => 'وارد کردن نام خانوادگی الزامی است',
            'email.required' => 'وارد کردن ایمیل الزامی است',
            'email.email' => 'لطفا ایمیل صحیح وارد کنید',
            'email.unique' => 'ایمیل تکراری می باشد لطفا ایمیل دیگری انتخاب کنید',
            'password.required' => 'وارد کردن رمز عبور الزامی است',
            'password.confirmed' => ' رمز عبور با یکدیگر تطابق ندارند',
            'password.min' => 'حداقل کارکتر ورودی رمز عبور 6 حرف است',
            'captcha.required' => 'وارد کردن کد امنیتی الزامی است',
            'captcha.captcha' => 'لطفا کد امنیتی صحیح را وارد کنید'
        ]);

        User::create([
            'firstname' => strip_tags($incommingFields['firstname']),
            'lastname' => strip_tags($incommingFields['lastname']),
            'email' => strip_tags($incommingFields['email']),
            'password' => strip_tags($incommingFields['password']),
            'created_at' => Verta::now(),
            'updated_at' => Verta::now()
        ]);

         return redirect()->route('login')->with('success','کاربر مورد نظر با موفقیت ایجاد شد');
    }
}
