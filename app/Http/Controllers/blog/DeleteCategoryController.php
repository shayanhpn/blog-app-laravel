<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DeleteCategoryController extends Controller
{
    //Show Delete Category Page
    public function showDeleteCategoryPage(Category $id){
        return view('blog.delete-category',['category' => $id]);
    }
    // Delete Category Finction
    public function deleteCategoryFunction(Category $id){
        $id->delete();
        return redirect()->route('admin.create-category')->with('success','دسته با موفقیت حذف شد');
    }
}
