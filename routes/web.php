<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserDataController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\SentraController;

Route::group(['prefix' => ''], function () {
    Route::get('/', fn () => view('home.home'))->name('home');
    Route::get('/about', fn () => view('home.about'))->name('about');

    Route::get('/blog', fn () => view('home.blog.blog'))->name('blog');
    Route::get('/blog1', fn () => view('home.blog.blog1'))->name('blog1');
    Route::get('/blog2', fn () => view('home.blog.blog2'))->name('blog2');


    Route::get('/contact', fn () => view('home.contact'))->name('contact');

    Route::get('/sentra11', function () {
        return view('home.sentra.sentra11');
    });
    Route::get('/sentra12', function () {
        return view('home.sentra.sentra12');
    });
    Route::get('/sambang1', function () {
        return view('home.sentra.sambang1');
    });
    Route::get('/sambang2', function () {
        return view('home.sentra.sambang2');
    });
    Route::get('/sambang3', function () {
        return view('home.sentra.sambang3');
    });
    Route::get('/sambang4', function () {
        return view('home.sentra.sambang4');
    });
});

    // Route::get('/chart', fn() => view('home.sentra.addchart'))->name('chart');
    // Route::get('/cekout', fn() => view('home.sentra.cekout'))->name('cekout');

Route::middleware(['guest'])->group(function () {

    Route::get('/galeri/{page?}', [GaleriController::class, 'galeri'])->name('galeri');
    Route::get('/sentra/{page?}', [SentraController::class, 'sentra'])->name('sentra');

    Route::get('/regist', [UserRegisterController::class, 'showRegistration'])->name('register');
    Route::post('/regist', [UserRegisterController::class, 'register'])->name('register.process');
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
});
Route::middleware(['auth', 'akses:user'])->group(function () {
    Route::group(['prefix' => 'user'], function () {
        Route::get('/galeri/{page?}', [GaleriController::class, 'galeri'])->name('galeri');
        Route::get('/sentra/{page?}', [SentraController::class, 'sentra'])->name('sentra');
        Route::get('/sentra/{page?}/cart', [SentraController::class, 'cart'])->name('sentra.cart');
        Route::get('/sentra/{page?}/cart/checkout', [SentraController::class, 'cekout'])->name('sentra.cekout');
        Route::get('/sentra/{page?}/cart/checkout/{productName}/bayar', [SentraController::class, 'bayar'])->name('sentra.bayar');
        Route::post('/contact', [UserDataController::class, 'contact'])->name('contact');
        Route::get('/my-profile', [UserDataController::class, 'showUserData'])->name('profile.show');
        Route::get('/my-profile/edit', [UserDataController::class, 'editUserData'])->name('profile.edit')->middleware(['auth', 'akses:user']);
        Route::patch('/my-profile/edit', [UserDataController::class, 'update'])->name('profile.update')->middleware(['auth', 'akses:user']);
        Route::get('/change-password', [ChangePasswordController::class, 'showChangePasswordForm'])->name('change.password.form');
        Route::post('/change-password', [ChangePasswordController::class, 'changePassword'])->name('change.password');
    });
});

Route::get('/logout', [SesiController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'akses:admin'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get("/dashboard", [AdminController::class, "dashboard"])->name('dashboard');
        Route::get("/pembayaran", [SentraController::class, "adminPembayaran"])->name('pembayaran');
        Route::get("/galeri", [GaleriController::class, "adminGaleri"])->name('galeri')->middleware(['auth', 'akses:admin']);
        Route::post("/galeri/tambah", [GaleriController::class, "tambahGaleri"])->name('galeri.tambah');
        Route::get("/sentra", [SentraController::class, "adminSentra"])->name('sentra')->middleware(['auth', 'akses:admin']);
        Route::get("/artikel", [ArtikelController::class, "adminArtikel"])->name('artikel')->middleware(['auth', 'akses:admin']);



        Route::delete('/user-result/{editusertesdata}', [AdminController::class, 'historyDestroy'])->name('admin.userresult.destroy')->middleware(['auth', 'akses:admin']);
        Route::get("/user-profile", [AdminController::class, "showUser"])->name('admin.userprofile')->middleware(['auth', 'akses:admin']);
        Route::get("/user-profile/add-user", [AdminController::class, "showAddUser"])->name('admin.adduser')->middleware(['auth', 'akses:admin']);
        Route::post("/user-profile/add-user", [AdminController::class, "addUser"])->name('admin.adduser')->middleware(['auth', 'akses:admin']);
        Route::delete('/user-profile/{userdestroy}', [AdminController::class, 'userDestroy'])->name('admin.userprofile.destroy')->middleware(['auth', 'akses:admin']);
        Route::get('/profile', [AdminController::class, 'showProfile'])->name('admin.profile')->middleware(['auth', 'akses:admin']);
        Route::get("/dat-reg-asesmen/delete/{idasesi}", [AdminController::class, "AsesmenDeleteAll"])->name('admin.datregasesmen.delete')->middleware(['auth', 'akses:admin']);
        Route::get("/dat-reg-asesi/{idasesi}", [AdminController::class, "showRegAsesi"])->name('admin.datregasesi')->middleware(['auth', 'akses:admin']);
        Route::post('/dat-reg-asesi/store', [AdminController::class, 'storeDatRegAsesi'])->name('admin.datregasesi.store')->middleware(['auth', 'akses:admin']);
    });
});

Route::get('password/forgot', [ForgotPasswordController::class, 'showForgotForm'])->name('password.forgot');
Route::post('password/forgot', [ForgotPasswordController::class, 'forgotPassword'])->name('password.forgot.submit');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'resetPassword'])->name('password.reset.submit');
