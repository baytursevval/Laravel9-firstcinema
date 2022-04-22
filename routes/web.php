<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FilmController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/home1', function () {
    return view('home.index', );
});
Route::get('/',[HomeController::class,'home'])->name('home');

//Route::get('/home',[HomeController::class,'home1'])->name('home1');
Route::get('admin/login', [HomeController::class,'login'])->name('admin');

Route::get('/filmkategori/{category_id}', [HomeController::class, 'filmkategori'])->name('filmkategori');

//Admin********************
Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class,'index'])->name('adminhome')->middleware('auth');

Route::get('admin/login', [HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('admin/logout', [HomeController::class,'logout'])->name('admin_logout');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_category');

    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

   //film------------------------------------------
    Route::get('film', [\App\Http\Controllers\Admin\FilmController::class, 'index'])->name('admin_film');
    Route::get('/film/add', [FilmController::class, 'create'])->name('admin_film_add');
    Route::post('/update/{filmid}', [FilmController::class, 'update'])->name('admin_film_update');
    Route::post('/film/store', [FilmController::class, 'store'])->name('admin_film_store');
    Route::get('/film/delete/{filmid}', [FilmController::class, 'destroy'])->name('admin_film_delete');
    Route::get('/film/edit/{filmid}', [FilmController::class, 'edit'])->name('admin_film_edit');

});
Route::get('filmdetay/{filmid}', [HomeController::class, 'filmdetay'])->name('filmdetay');


Route::get('/test', [HomeController::class, 'test'])->name('test');
Route::get('/formgonder', [HomeController::class, 'formgonder'])->name('formgonder');
Route::get('/formgoster', [HomeController::class, 'formgoster'])->name('formgoster');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


