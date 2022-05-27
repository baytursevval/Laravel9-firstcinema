<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FilmController;
use App\Http\Controllers\Admin\HomeControllerAdmin;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MessageController;

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\PoıntController;

Route::get('signup',[HomeController::class,'signup'])->name('signup');
Route::post('signupcheck',[HomeController::class,'signupcheck'])->name('signupcheck');
//Route::get('register1',[HomeController::class,'register'])->name('register');


Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('blog',[HomeController::class,'blog'])->name('blog');
Route::get('contact',[HomeController::class,'contact'])->name('contact');
Route::get('aboutus',[HomeController::class,'aboutus'])->name('aboutus');
Route::get('references',[HomeController::class,'references'])->name('references');


Route::post('sendmessage',[HomeController::class,'sendmessage'])->name('sendmessage');

Route::get('faq',[HomeController::class,'faq'])->name('faq');

Route::get('/home',[HomeController::class,'home1'])->name('home1');
//Route::get('admin/login', [HomeController::class,'login'])->name('admin');

Route::get('/filmkategori/{category_id}', [HomeController::class, 'filmkategori'])->name('filmkategori');

Route::post('filmsearch', [HomeController::class,'filmsearch'])->name('filmsearch');
//Route::get('searchresult', [HomeController::class,'searchresult'])->name('searchresult');

    //Admin********************

    Route::get('/admin2', [HomeControllerAdmin::class,'index'])->name('adminhome2');
    //Route::get('admin2',function (){return view('index');})->name('admin2');
    Route::get('admin/login', [HomeController::class,'login'])->name('admin_login');
    Route::post('/admin/logincheck', [HomeController::class,'logincheck'])->name('admin_logincheck');
    Route::get('admin/logout', [HomeController::class,'logout'])->name('admin_logout');
    //Route::get('logout', [HomeController::class,'logout'])->name('logout');
   // Route::get('filmdetay2/{film_id}', [HomeController::class,'filmdetay2'])->name('filmdetay2');

    Route::middleware('auth')->prefix('admin')->group(function () {

        Route::middleware('admin')->group(function () {
            Route::get('/admin', [HomeControllerAdmin::class,'index'])->name('adminhome');
    //category***********************
    Route::get('/', [\App\Http\Controllers\Admin\HomeControllerAdmin::class,'index'])->name('admin_category');
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    //Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
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

    //message************
    Route::prefix('messages')->group(function (){
        Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
        Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
        Route::get('show', [MessageController::class, 'show'])->name('admin_message_show');
    });

    //setting********************
    Route::get('setting', [SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update', [SettingController::class,'update'])->name('admin_setting_update');

        #faq***
        Route::get('faq', [\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
        Route::get('/faq/add', [FaqController::class, 'create'])->name('admin_faq_add');
        Route::post('/faq/update/{faqid}', [FaqController::class, 'update'])->name('admin_faq_update');
        Route::post('/faq/store', [FaqController::class, 'store'])->name('admin_faq_store');
        Route::get('/faq/delete/{faqid}', [FaqController::class, 'destroy'])->name('admin_faq_delete');
        Route::get('/faq/edit/{faqid}', [FaqController::class, 'edit'])->name('admin_faq_edit');

Route::prefix('user')->group(function (){

Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_user');
Route::post('create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
Route::post('', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'delete'])->name('admin_user_delete');
Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
Route::post('userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');

});

        }); #admin
    }); #auth

    Route::get('filmdetay/{film_id}', [HomeController::class, 'filmdetay'])->name('filmdetay');
    Route::post('comment/add/{film_id}', [CommentController::class, 'create'])->name('comment_add');
    Route::post('point/add/{film_id}', [PoıntController::class, 'addpoint'])->name('point_add');
    Route::get('likefilm/{film_id}', [HomeController::class, 'likefilm'])->name('likefilm');
    Route::get('unlikefilm/{film_id}', [HomeController::class, 'unlikefilm'])->name('unlikefilm');

    #user***************
    Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
    Route::post('/update', [UserController::class, 'update'])->name('myprofile_update');
    Route::get('/like/{user_id}', [UserController::class, 'like'])->name('user_film_like');
    Route::get('/unlike/{film_id}', [UserController::class, 'unlike'])->name('user_film_unlike');

    Route::get('/mycomments', [CommentController::class, 'mycomments'])->name('mycomments');
    Route::get('/delete/comments/{id}', [CommentController::class, 'delete'])->name('del_comment');
    Route::get('/edit/comments/{id}', [CommentController::class, 'edit'])->name('edit_comment');
    Route::post('/update/comment/{id}', [CommentController::class, 'update'])->name('update_comment');

    Route::prefix('film')->group(function (){
    Route::get('/', [\App\Http\Controllers\FilmController::class, 'index'])->name('user_film');
    Route::get('add', [\App\Http\Controllers\FilmController::class, 'create'])->name('user_film_add');
    Route::post('/update/{filmid}', [\App\Http\Controllers\FilmController::class, 'update'])->name('user_film_update');
    Route::post('store', [\App\Http\Controllers\FilmController::class, 'store'])->name('user_film_store');
    Route::get('delete/{filmid}', [\App\Http\Controllers\FilmController::class, 'destroy'])->name('user_film_delete');
    Route::get('edit/{filmid}', [\App\Http\Controllers\FilmController::class, 'edit'])->name('user_film_edit');
    });

    Route::prefix('image')->group(function (){
    Route::get('create/{film_id}', [ImageController::class, 'create'])->name('user_image_add');
    Route::post('store/{film_id}', [ImageController::class, 'store'])->name('user_image_store');
    Route::get('delete/{film_id}/{id}', [ImageController::class, 'destroy'])->name('user_image_delete');
    Route::get('show', [ImageController::class, 'show'])->name('user_image_show');
        });


});


Route::get('/test', [HomeController::class, 'test'])->name('test');
Route::get('/formgonder', [HomeController::class, 'formgonder'])->name('formgonder');
Route::get('/formgoster', [HomeController::class, 'formgoster'])->name('formgoster');

Route::get('/dashboard', function () {
    return view('dashboard');})->middleware(['auth'])->name('dashboard');
//Route::get('/dashboard', function () {    return view('dashboard');})->name('dashboard');



require __DIR__.'/auth.php';


