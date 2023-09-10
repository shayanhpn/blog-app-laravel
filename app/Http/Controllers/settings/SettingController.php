<?php

namespace App\Http\Controllers\settings;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    // Show Setting Page for logo,about Site
    public function showSettingPage(){
        $settings = Setting::firstOrNew([]);
        return view('admin.settings',compact('settings'));
    }
}
