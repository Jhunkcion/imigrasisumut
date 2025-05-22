<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ChangePasswordController;

/*
|--------------------------------------------------------------------------
| ROUTE FRONT-END (public)
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('user.home');

/*Profile*/
Route::get('/tentang-kami', [ProfilController::class, 'index'])->name('tentang-kami');
Route::get('/alamat-kami', [ProfilController::class, 'alamatKami'])->name('alamat-kami');
Route::get('/struktur-organisasi', [ProfilController::class, 'strukturOrganisasi'])->name('struktur-organisasi');
Route::get('/dipa', [ProfilController::class, 'dipa'])->name('dipa');
Route::get('/lakip', [ProfilController::class, 'lakip'])->name('lakip');
Route::get('/standar-pelayanan', [ProfilController::class, 'standarPelayanan'])->name('standar-pelayanan');
Route::get('/zona-integritas', [ProfilController::class, 'zonaIntegritas'])->name('zona-integritas');




/* Berita */
Route::get('/berita', [BeritaController::class, 'all'])->name('news.all_news');
Route::get('/berita/{id}', [HomeController::class, 'show_berita'])->name('user.news');

/* Layanan */
Route::get('/services', [ServiceController::class, 'all'])->name('services.all_service');
Route::get('/services/{id}', [HomeController::class, 'show_service'])->name('user.service');

/* Pengumuman */
Route::get('/announcements', [AnnouncementController::class, 'all'])->name('announcements.all_announcement');
Route::get('/announcements/{id}', [HomeController::class, 'show_announcement'])->name('user.announcement');

/*
|--------------------------------------------------------------------------
| ROUTE ADMIN (prefix: /admin)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {

    /* --- AUTH scaffolding (login, reset, dll.) --- */
    Route::get('/', function () { // /admin  → form login
        return view('auth/login');
    });

    /* blok ini men-disable /admin/register */
    Route::match(['GET', 'POST'], '/register', function () {
        return redirect('/admin/login');
    })->name('register');

    /* Laravel auth routes (prefix otomatis /admin/...) */
    Auth::routes([
        'register' => false, // kalau memang mau menon-aktifkan register sepenuhnya
    ]);

    /*
    |----------------------------------------------------------------------
    | Hanya untuk user YANG TELAH LOGIN (middleware auth)
    |----------------------------------------------------------------------
    */
    Route::middleware('auth')->group(function () {

        /* == GANTI PASSWORD (saat sudah login) == */
        Route::get('/change-password', [ChangePasswordController::class, 'edit'])->name('admin.password.edit');
        Route::post('/change-password', [ChangePasswordController::class, 'update'])->name('admin.password.update');

        /* DASHBOARD */
        Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');

        /* CATEGORIES */
        Route::get('/categories/{category}/restore', 'CategoryController@restore')->name('categories.restore');
        Route::delete('/categories/{category}/delete-permanent', 'CategoryController@deletePermanent')->name('categories.delete-permanent');
        Route::get('/ajax/categories/search', 'CategoryController@ajaxSearch');
        Route::resource('categories', 'CategoryController');

        /* PENGUMUMAN */
        Route::resource('announcements', AnnouncementController::class)->except(['show'])->names([
            'index'   => 'announcements.index',
            'create'  => 'announcements.create',
            'store'   => 'announcements.store',
            'edit'    => 'announcements.edit',
            'update'  => 'announcements.update',
            'destroy' => 'announcements.destroy',
        ]);

        /* ABOUT */
        Route::get('abouts', [AboutController::class, 'index'])->name('abouts.index');
        Route::get('abouts/{id}/edit', [AboutController::class, 'edit'])->name('abouts.edit');
        Route::put('abouts/{id}', [AboutController::class, 'update'])->name('abouts.update');

        /* BERITA */
        Route::resource('beritas', BeritaController::class)->except(['show'])->names([
            'index'   => 'news.index',
            'create'  => 'news.create',
            'store'   => 'news.store',
            'edit'    => 'news.edit',
            'update'  => 'news.update',
            'destroy' => 'news.destroy',
        ]);
        Route::patch('/news/{id}/publish', [BeritaController::class, 'publish'])->name('news.publish');

        /* SERVICE */
        Route::resource('services', ServiceController::class)->except(['show'])->names([
            'index'   => 'services.index',
            'create'  => 'services.create',
            'store'   => 'services.store',
            'edit'    => 'services.edit',
            'update'  => 'service.update',
            'destroy' => 'services.destroy',
        ]);

        /* Tambah route admin lain di sini… */
    });
});
