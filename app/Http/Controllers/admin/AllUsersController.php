<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AllUsersController extends Controller
{
    // View All Users In Admin Panel
    public function showUsersPage(){
        $users = User::orderBy('created_at','desc')->paginate(10);
        return view('admin.show-all-users',['users' => $users]);
    }
}
