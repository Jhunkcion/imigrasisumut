<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
  return view('user.home');
});

// Route::get('/home', 'UserController@home')->name('home');
// Route::get('/blog', 'UserController@blog')->name('blog');
// Route::get('/blog/{slug}', 'UserController@show_article')->name('blog.show');
// Route::get('/destination', 'UserController@destination')->name('destination');
// Route::get('/destination/{slug}', 'UserController@show_destination')->name('destination.show');
// Route::get('/contact', 'UserController@contact')->name('contact');

// Route Berita Pada User
Route::get('/', [HomeController::class, 'indexBerita'])->name('user.home');
Route::get('/berita/{id}', [HomeController::class, 'show_berita'])->name('user.news', );

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

  // route article
  Route::post('/articles/upload', [ArticleController::class, 'upload'])->name('articles.upload')->middleware('auth');
  Route::resource('/articles', ArticleController::class)->middleware('auth');




  // route destination
  Route::resource('/destinations', 'DestinationController')->middleware('auth');

  // Route about
  Route::get('/abouts', 'AboutController@index')->name('abouts.index')->middleware('auth');
  Route::get('/abouts/{about}/edit', 'AboutController@edit')->name('abouts.edit')->middleware('auth');
  Route::put('/abouts/{about}', 'AboutController@update')->name('abouts.update')->middleware('auth');



  //Route::get('/articles', 'UserController@blog')->name('articles.index');
  //Route::get('/articles/{slug}', 'UserController@show_article')->name('articles.show');

  // Route::get('/notices/{slug}', [UserController::class, 'show_notice'])->name('notices.show');
  // Route::get('/notices', [UserController::class, 'notice'])->name('notices.index');

});
