<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewUserController extends Controller
{
    // View Single User Detail
    public function viewUserDetail(User $id){
        return view('admin.view-user',['user'=> $id]);
    }
}
