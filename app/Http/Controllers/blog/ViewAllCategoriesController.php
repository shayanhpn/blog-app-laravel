<?php

namespace App\Http\Controllers\blog;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewAllCategoriesController extends Controller
{
        // Show Ctagories in Admin Panel
        public function showCategoryPage(){
            $categories = Category::all();
            return view('blog.create-category',['categories' => $categories]);
        }
}
