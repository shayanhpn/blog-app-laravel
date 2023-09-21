<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteUserController extends Controller
{
    // View Delete User In Admin Panel
    public function showDeleteUserPage(User $id){
        return view('admin.delete-user',['user'=> $id]);
    }

    // Delete User Function
    public function deleteuserFunc(User $id){
        if(auth()->user()->id == $id->id){
            $id->delete();
            return redirect()->route('admin.users')->with('success','کاربر مورد نظر با موفقیت حذف شد');
        }
        return back()->with('danger','شما دسترسی به این عملیات را ندارید');
    }

}
