<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FilmController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\PoıntController;


Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('blog',[HomeController::class,'blog'])->name('blog');
Route::get('contact',[HomeController::class,'contact'])->name('contact');

Route::get('/home',[HomeController::class,'home1'])->name('home1');
Route::get('admin/login', [HomeController::class,'login'])->name('admin');

Route::get('/filmkategori/{category_id}', [HomeController::class, 'filmkategori'])->name('filmkategori');

    //Admin********************
    Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class,'index'])->middleware('auth')->name('adminhome');
 //   Route::get('admin/login1', [HomeController::class,'login'])->name('admin_login');
    Route::post('/admin/logincheck', [HomeController::class,'logincheck'])->name('admin_logincheck');
    Route::get('admin/logout', [HomeController::class,'logout'])->name('admin_logout');
    //Route::get('logout', [HomeController::class,'logout'])->name('logout');


    Route::middleware('auth')->prefix('admin')->group(function () {
    //category***********************
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_category');
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
   //film*********************
    Route::get('film', [\App\Http\Controllers\Admin\FilmController::class, 'index'])->name('admin_film');
    Route::get('/film/add', [FilmController::class, 'create'])->name('admin_film_add');
    Route::post('/update/{filmid}', [FilmController::class, 'update'])->name('admin_film_update');
    Route::post('/film/store', [FilmController::class, 'store'])->name('admin_film_store');
    Route::get('/film/delete/{filmid}', [FilmController::class, 'destroy'])->name('admin_film_delete');
    Route::get('/film/edit/{filmid}', [FilmController::class, 'edit'])->name('admin_film_edit');
    //film image gallery********************
    Route::prefix('image')->group(function (){
    Route::get('create/{film_id}', [ImageController::class, 'create'])->name('admin_image_add');
    Route::post('store/{film_id}', [ImageController::class, 'store'])->name('admin_image_store');
    Route::get('delete/{film_id}/{id}', [ImageController::class, 'destroy'])->name('admin_image_delete');
    Route::get('show', [ImageController::class, 'show'])->name('admin_image_show');
});
    //setting********************
    Route::get('setting', [SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update', [SettingController::class,'update'])->name('admin_setting_update');
});
    Route::get('filmdetay/{filmid}', [HomeController::class, 'filmdetay'])->name('filmdetay');
    Route::post('comment/add/{film_id}', [CommentController::class, 'create'])->name('comment_add');
    Route::post('point/add/{film_id}', [PoıntController::class, 'create'])->name('point_add');

    #user***************
    Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
    Route::post('/update', [UserController::class, 'update'])->name('myprofile_update');

    Route::get('/mycomments', [CommentController::class, 'mycomments'])->name('mycomments');
    Route::get('/delete/comments/{id}', [CommentController::class, 'delete'])->name('del_comment');
    Route::get('/edit/comments/{id}', [CommentController::class, 'edit'])->name('edit_comment');
    Route::post('/update/comment/{id}', [CommentController::class, 'update'])->name('update_comment');
});



Route::get('/test', [HomeController::class, 'test'])->name('test');
Route::get('/formgonder', [HomeController::class, 'formgonder'])->name('formgonder');
Route::get('/formgoster', [HomeController::class, 'formgoster'])->name('formgoster');

Route::get('/dashboard', function () {    return view('dashboard');})->middleware(['auth'])->name('dashboard');
//Route::get('/dashboard', function () {    return view('dashboard');})->name('dashboard');


require __DIR__.'/auth.php';


