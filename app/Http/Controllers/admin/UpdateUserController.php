<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class UpdateUserController extends Controller
{
    // View Update User Page
    public function viewUpdateUserPage(User $id){
        return view('admin.update-user',['user' => $id]);
    }

    // Update User Function
    public function updateUserFunc(Request $request ,User $user){
        $updateFields = $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required','email',
                Rule::unique('users')->ignore($user->id)
        ],
            'author_desc' => ['nullable','string'],
            'avatar' => ['nullable','image','mimes:jpeg,png,jpg,gif','max:2048']
        ],[
            'firstname.required' => 'وارد کردن نام الزامی می باشد',
            'lastname.required' => 'وارد کردن نام خانوادگی الزامی می باشد',
            'email.required' => 'وارد کردن ایمیل الزامی می باشد',
            'email.unique' => 'این آدرس ایمیل قبلا انتخاب شده است'
        ]);



        $user->firstname = strip_tags($updateFields['firstname']);
        $user->lastname = strip_tags($updateFields['lastname']);
        $user->email = strip_tags($updateFields['email']);
        $user->author_desc = strip_tags($updateFields['author_desc']);
        if($request->hasFile('avatar'))
        {
            $fileName = 'avatars/'. time() . '.' . $request->file('avatar')->getClientOriginalName();
            $request->avatar->move(public_path('avatars'),$fileName);
            $user->avatar = $fileName;
        }
        $user->updated_at = Verta::now();
        $user->save();

        return redirect()->route('admin.users')->with('success','حساب کاربری شما با موفقیت بروزرسانی شد');
    }
}
