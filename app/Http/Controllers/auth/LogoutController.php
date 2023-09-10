<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    // Logout User Function
    public function logoutFunction(){
        auth()->logout();
        return redirect()->route('login')->with('danger','شما با موفقیت خارج شدید');
    }
}
