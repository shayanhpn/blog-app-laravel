<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Http\Request;

class CreateCategoryController extends Controller
{

    // Create Category in Admin Panel
    public function createCategoryFunction(Request $request){
        $catInputs = $request->validate([
            'title' => ['required'],
            'description' => ['required']
        ],[
         'title.required' => 'وارد کردن عنوان الزامی می باشد',
         'description.required' => 'وارد کردن توضیحات الزامی می باشد'   
        ]);

        Category::create([
            'title' => strip_tags($catInputs['title']),
            'description' => strip_tags($catInputs['description']),
            'created_at' => Verta::now(),
            'updated_at' => Verta::now()
        ]);
        return redirect()->route('admin.create-category');
    }
}
