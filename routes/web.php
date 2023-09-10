<?php

use App\Models\NewsLetter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\blog\CategoryController;
use App\Http\Controllers\blog\ViewPostController;
use App\Http\Controllers\contact\ViewAllContacts;
use App\Http\Controllers\search\SearchController;
use App\Http\Controllers\admin\AllUsersController;
use App\Http\Controllers\admin\ViewUserController;
use App\Http\Controllers\blog\CreatePostController;
use App\Http\Controllers\blog\DeletePostController;
use App\Http\Controllers\blog\UpdatePostController;
use App\Http\Controllers\blog\UsersPostsController;
use App\Http\Controllers\captcha\CaptchaController;
use App\Http\Controllers\comment\CommentController;
use App\Http\Controllers\contact\ContactController;
use App\Http\Controllers\admin\DeleteUserController;
use App\Http\Controllers\admin\UpdateUserController;
use App\Http\Controllers\settings\SettingController;
use App\Http\Controllers\blog\ViewCategoryController;
use App\Http\Controllers\blog\CreateCategoryController;
use App\Http\Controllers\comment\ShowCommentsController;
use App\Http\Controllers\comment\DeleteCommentController;
use App\Http\Controllers\contact\DeleteContactController;
use App\Http\Controllers\newsletter\NewsLetterController;
use App\Http\Controllers\admin\ViewAllBlogPostsController;
use App\Http\Controllers\blog\DeleteCategoryController;
use App\Http\Controllers\blog\UpdateCategoryController;
use App\Http\Controllers\blog\ViewAllCategoriesController;
use App\Http\Controllers\contact\ViewAllContactsController;
use App\Http\Controllers\comment\ViewSingleCommentController;
use App\Http\Controllers\contact\ViewSingleContactController;
use App\Http\Controllers\settings\SettingsFunctionController;
use App\Http\Controllers\comment\ChangeStatusCommentController;

//MainPage
Route::get('/',[MainPageController::class,'showMainPage'])->name('main-page');


//Admin Routes
Route::prefix('/admin')->middleware('auth')->name('admin.')->group(function(){
    Route::get('/dashboard',[AdminController::class,'showDashboardPage'])->name('dashboard');
    Route::get('/create-post',[CreatePostController::class,'showCreatePostPage'])->name('create-post');
    Route::post('/create-post',[CreatePostController::class,'createPostFunction']);
    Route::get('/view-posts',[ViewAllBlogPostsController::class,'showAllBlogPosts'])->name('view-posts');
    Route::get('/create-user',[AdminController::class,'showRegisterUserPage'])->name('create-user');
    Route::post('/create-user',[RegisterController::class,'registerFunction']);
    Route::get('/users',[AllUsersController::class,'showUsersPage'])->name('users');
    Route::get('/update-post/{id}',[UpdatePostController::class,'showUpdatePostPage'])->name('update-post');
    Route::put('/update-post/{post}',[UpdatePostController::class,'updatePostFunction'])->name('update-post-func');
    Route::get('/delete-post/{id}',[DeletePostController::class,'showDeletePostPage'])->name('delete-post');
    Route::delete('/delete-post/{id}',[DeletePostController::class,'deletePost']);
    Route::get('/view-user/{id}',[ViewUserController::class,'viewUserDetail'])->name('view-user');
    Route::get('/update-user/{id}',[UpdateUserController::class,'viewUpdateUserPage'])->name('update-user');
    Route::put('/update-user/{user}',[UpdateUserController::class,'updateUserFunc'])->name('update-user-func');
    Route::get('/delete-user/{id}',[DeleteUserController::class,'showDeleteUserPage'])->name('delete-user');
    Route::delete('/delete-user/{id}',[DeleteUserController::class,'deleteuserFunc'])->name('delete-user-func');
    Route::get('/my-posts',[UsersPostsController::class,'showUsersPosts'])->name('my-posts');
    
    Route::get('/comments',[ShowCommentsController::class,'showAllComments'])->name('all-comments');
    Route::get('/comment/{id}',[ViewSingleCommentController::class,'showSingleComment'])->name('single-comment');
    Route::get('/comment/{id}/status',[ChangeStatusCommentController::class,'showChangeStatus'])->name('change-status');
    Route::put('/comment/{id}/status',[ChangeStatusCommentController::class,'changeStatus'])->name('status-func');
    Route::get('/comment/delete/{id}',[DeleteCommentController::class,'showDeletePage'])->name('delete-comment');
    Route::delete('/comment/delete/{id}',[DeleteCommentController::class,'deleteComment'])->name('delete-comment-func');
     
    Route::get('/contacts',[ViewAllContactsController::class,'showAllContacts'])->name('all-contacts');
    Route::get('/contact/{id}',[ViewSingleContactController::class,'showContactPage'])->name('view-contact');
    Route::get('/contact/delete/{id}',[DeleteContactController::class,'showDeleteContact'])->name('delete-contact');
    Route::delete('/contact/delete/{id}',[DeleteContactController::class,'deleteContact'])->name('delete-contact-func');
    //Settings
    Route::get('/settings',[SettingController::class,'showSettingPage'])->name('view-settings');
    Route::put('/settings',[SettingsFunctionController::class,'settingsFunctions'])->name('update-setting');
    //Category
    Route::get('/create-category',[ViewAllCategoriesController::class,'showCategoryPage'])->name('create-category');
    Route::post('/create-category',[CreateCategoryController::class,'createCategoryFunction']);
    Route::get('/view-category/{id}',[ViewCategoryController::class,'viewSingleCategory'])->name('view-category');
    Route::get('/update-category/{id}',[UpdateCategoryController::class,'ShowUpdateCategoryPage'])->name('show-update-category');
    Route::put('/update-category/{id}',[UpdateCategoryController::class,'updateCategoryFunction'])->name('update-category-function');
    Route::get('/delete-category/{id}',[DeleteCategoryController::class,'showDeleteCategoryPage'])->name('show-delete-category');
    Route::delete('/delete-category/{id}',[DeleteCategoryController::class,'deleteCategoryFunction'])->name('delete-category-function');
});





//Auth Routes
Route::get('/register',[RegisterController::class,'showRegisterPage'])->name('register');
Route::post('/register',[RegisterController::class,'registerFunction']);
Route::get('/login',[LoginController::class,'showLoginPage'])->name('login');
Route::post('/login',[LoginController::class,'loginFuction']);
Route::post('/logout',[LogoutController::class,'logoutFunction'])->name('logout');

//Single Post View
Route::get('/post/{slug}',[ViewPostController::class,'showSingleViewPost'])->name('view-post-pub');
//Create Comment
Route::post('/post/{slug}',[CommentController::class,'createComment'])->name('create-comment');
//Pages Routes
Route::get('/contact',[MainPageController::class,'showContactPage'])->name('contact');
Route::post('/contact',[ContactController::class,'submitContact'])->name('submit-contact');
Route::get('/about',[MainPageController::class,'showAboutPage'])->name('about');
Route::get('/reload-captcha',[CaptchaController::class,'reloadCaptcha']);

//Search
Route::get('/search',[MainPageController::class,'showMainPage'])->name('search');
//NewsLetter
Route::post('/newsletter/submit',[NewsLetterController::class,'submitNewsLetter'])->name('submit-form');
