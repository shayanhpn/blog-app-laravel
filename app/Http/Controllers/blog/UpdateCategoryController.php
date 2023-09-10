<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Http\Request;

class UpdateCategoryController extends Controller
{
    // Show Update Category Page
    public function ShowUpdateCategoryPage(Category $id){
        return view('blog.update-category',['category'=>$id]);
    }

    // Update Category Function
    public function updateCategoryFunction(Request $request,Category $id){
        $categoryFields = $request->validate([
            'title' => ['required'],
            'description' => ['required']
        ]);
        $id->title = strip_tags($categoryFields['title']);
        $id->description = strip_tags($categoryFields['description']);
        $id->updated_at = Verta::now();
        $id->save();
        return redirect()->route('admin.create-category')->with('success','دسته مورد نظر با موفقیت بروز شد');

    }
}
