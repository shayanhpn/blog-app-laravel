<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsFunctionController extends Controller
{
    // Settings Function Page for logo,about Site
    public function settingsFunctions(Request $request){
        $settingFields = $request->validate([
            'logo' => ['nullable','string'],
            'about' => ['nullable','string']
        ]);
        $setting = Setting::first();
        if($setting === null){
            Setting::create([
                'logo' => strip_tags($settingFields['logo']),
                'about' => strip_tags($settingFields['about'])
            ]);
        }
        if($setting !== null){
            $setting->update([
                'logo' => strip_tags($settingFields['logo']),
                'about' => strip_tags($settingFields['about'])
            ]);
        }
        return redirect()->route('admin.view-settings')->with('success','تنظیمات بروزرسانی شد');

    }
}
