<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ServiceController;


Route::get('/', [HomeController::class, 'index'])->name('user.home');

// Route Berita Pada User
Route::get('/berita', [BeritaController::class, 'all'])->name('news.all_news');
Route::get('/berita/{id}', [HomeController::class, 'show_berita'])->name('user.news', );

// Route Service Pada User
Route::get('/services', [ServiceController::class, 'all'])->name('services.all_service');
Route::get('/services/{id}', [HomeController::class, 'show_service'])->name('user.service');

Route::prefix('admin')->group(function () {
  Route::get('/', function () {
    return view('auth/login');
  });
  // handle route register
  Route::match(["GET", "POST"], "/register", function () {
    return redirect("/login");
  })->name("register");
  
  Auth::routes();

  // Route Dashboard
  Route::get('/dashboard', 'DashboardController@index')->middleware('auth');
  
  
  // Route categories
  Route::get('/categories/{category}/restore', 'CategoryController@restore')->name('categories.restore');
  Route::delete('/categories/{category}/delete-permanent', 'CategoryController@deletePermanent')->name('categories.delete-permanent');
  Route::get('/ajax/categories/search', 'CategoryController@ajaxSearch');
  Route::resource('categories', 'CategoryController')->middleware('auth');

  // Route notices
  Route::get('/notices/{notice}/restore', 'NoticeController@restore')->name('notices.restore');
  Route::delete('/notices/{notice}/delete-permanent', 'NoticeController@deletePermanent')->name('notices.delete-permanent');
  Route::get('/ajax/notices/search', 'NoticeController@ajaxSearch');
  Route::resource('notices', 'NoticeController')->middleware('auth');

  // Route About
  Route::get('abouts', [AboutController::class, 'index'])->name('abouts.index');
  Route::get('abouts/{id}/edit', [AboutController::class, 'edit'])->name('abouts.edit');
  Route::put('abouts/{id}', [AboutController::class, 'update'])->name('abouts.update');

  /* ---------------- Berita Controller -------------------- */
  Route::get('/beritas', [BeritaController::class, 'adminIndex'])->name('news.index');
  Route::get('/beritas/create', [BeritaController::class, 'create'])->name('news.create');
  Route::post('/beritas', [BeritaController::class, 'store'])->name('news.store');
  Route::get('/beritas/{id}/edit', [BeritaController::class, 'edit'])->name('news.edit');
  Route::put('/beritas/{id}', [BeritaController::class, 'update'])->name('news.update');
  Route::delete('/beritas/{id}', [BeritaController::class, 'destroy'])->name('news.destroy');
  Route::patch('/admin/news/{id}/publish', [BeritaController::class, 'publish'])->name('news.publish');

  Route::get('/services', [ServiceController::class, 'adminIndex'])->name('services.index');
  Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
  Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
  Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
  Route::put('/services/{id}', [ServiceController::class, 'update'])->name('service.update');
  Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');




  // route destination
  Route::resource('/destinations', 'DestinationController')->middleware('auth');

  // Route about
  // Route::get('/abouts', 'AboutController@index')->name('abouts.index')->middleware('auth');
  // Route::get('/abouts/{about}/edit', 'AboutController@edit')->name('abouts.edit')->middleware('auth');
  // Route::put('/abouts/{about}', 'AboutController@update')->name('abouts.update')->middleware('auth');



  //Route::get('/articles', 'UserController@blog')->name('articles.index');
  //Route::get('/articles/{slug}', 'UserController@show_article')->name('articles.show');

  // Route::get('/notices/{slug}', [UserController::class, 'show_notice'])->name('notices.show');
  // Route::get('/notices', [UserController::class, 'notice'])->name('notices.index');

});
