<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ViewCategoryController extends Controller
{
    // View Single Category Page
    public function viewSingleCategory(Category $id){
        return view('blog.view-category',['category' => $id]);
    }
}
