<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CartController;

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserDataController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\QuizController;

Route::group(['prefix' => ''], function () {
    Route::get('/materi', fn () => view('home.materi'))->name('materi');

    Route::get('/quiz1', fn () => view('home.quiz.quiz1'))->name('quiz1');
    Route::get('/quiz2', fn () => view('home.quiz.quiz2'))->name('quiz2');
    Route::get('/cart', fn() => view('home.quiz.addcart'))->name('cart');
    Route::get('/cekout', fn() => view('home.quiz.cekout'))->name('cekout');
    Route::get('/bayar', fn() => view('home.quiz.form-bayar'))->name('bayar');

});

Route::middleware(['guest'])->group(function () {
    Route::get('/', [ViewController::class, 'home'])->name('guest.home');
    Route::get('/lab/{page?}', [LabController::class, 'lab'])->name('guest.lab');
    Route::get('/quiz/{page?}', [QuizController::class, 'quiz'])->name('guest.quiz');
    Route::get('/materi', [ViewController::class, 'materi'])->name('guest.materi');

    Route::get('/regist', [UserRegisterController::class, 'showRegistration'])->name('register');
    Route::post('/regist', [UserRegisterController::class, 'register'])->name('register.process');
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
});

Route::middleware(['auth', 'akses:user'])->group(function () {
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [ViewController::class, 'home'])->name ('home');

        Route::get('/lab/{page?}', [LabController::class, 'lab'])->name('lab');
        Route::get('/lab/{page?}', [LabController::class, 'user'])->name('lab');

        Route::get('/quiz', [QuizController::class, 'quiz'])->name('quiz');
        Route::get('/quiz/kegiatan', [QuizController::class, 'kegiatan'])->name('quiz.kegiatan');
        Route::get('/quiz/produk', [QuizController::class, 'produk'])->name('quiz.produk');
        Route::get('/quiz/cart', [CartController::class, 'cart'])->name('quiz.cart');
        Route::post('/quiz/addCart', [CartController::class, 'addCart'])->name('quiz.addCart');
        Route::get('/quiz/cekout/{product_id}', [CartController::class, 'cekout'])->name('quiz.cekout');

        Route::post('/quiz/cekout/bayar', [CartController::class, 'kirim'])->name('quiz.kirim');

        Route::get('/materi', [ViewController::class, 'materi'])->name('materi');

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
        Route::get("/dashboard", [AdminController::class, "orders"])->name('dashboard');
        Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
        Route::get("/pembayaran", [AdminController::class, "adminPembayaran"])->name('pembayaran');

        Route::get("/lab", [LabController::class, "adminlab"])->name('lab')->middleware(['auth', 'akses:admin']);
        Route::post("/lab/tambah", [LabController::class, "tambahlab"])->name('lab.tambah');

        Route::get("/lab", [LabController::class, "adminlab"])->name('admin.lab')->middleware(['auth', 'akses:admin']);
        Route::post("/lab/tambah", [LabController::class, "tambahlab"])->name('admin.lab.tambah');

        // lab Admin
        Route::get('/admin/lab/{id}/edit', [LabController::class, 'edit'])->name('admin.lab.edit');
        Route::delete('/admin/lab/delete/{id}', [LabController::class, 'destroy'])->name('admin.lab.delete');
        Route::get('/admin/lab/{id}/edit', [LabController::class, 'edit'])->name('lab.edit');
        Route::put('/admin/lab/{id}', [LabController::class, 'update'])->name('lab.update');

        Route::get('/admin/lab/{id}/edit', [LabController::class, 'edit'])->name('admin.lab.edit');
        Route::put('/admin/lab/{id}', [LabController::class, 'update'])->name('admin.lab.update');

        // Artikel Admin
        Route::get("/artikel", [ArtikelController::class, "adminArtikel"])->name('admin.artikel')->middleware(['auth', 'akses:admin']);
        Route::post("/artikel/tambah", [ArtikelController::class, "tambahArtikel"])->name('admin.artikel.tambah');
        Route::get('/admin/artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('admin.artikel.edit');
        Route::delete('/admin/artikel/delete/{id}', [ArtikelController::class, 'destroy'])->name('admin.artikel.delete');
        // Rute untuk menampilkan halaman edit
        Route::get('/admin/artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('admin.artikel.edit');
        Route::put('/admin/artikel/{id}', [ArtikelController::class, 'update'])->name('admin.artikel.update');

        Route::group(['prefix' => 'quiz'], function () {
            Route::get("/", [QuizController::class, "adminquiz"])->name('admin.quiz')->middleware(['auth', 'akses:admin']);
            Route::post("/tambah", [QuizController::class, "tambahquiz"])->name('tambahquiz')->middleware(['auth', 'akses:admin']);
            Route::post("/delete/{id}", [QuizController::class, "deletequiz"])->name('deletequiz')->middleware(['auth', 'akses:admin']);
            Route::get("/{id}/edit", [QuizController::class, "editquiz"])->name('editquiz')->middleware(['auth', 'akses:admin']);
            Route::put("/{id}", [QuizController::class, "updatequiz"])->name('updatequiz')->middleware(['auth', 'akses:admin']);
        });

        Route::get("/transaksi", [AdminController::class, "transaksi"])->name('admin.transaksi')->middleware(['auth', 'akses:admin']);

        Route::get("/account", [AdminController::class, "account"])->name('account');
        Route::get("edit-account", [AdminController::class, "editaccount"])->name('editaccount');
        Route::patch("/simpanaccount", [AdminController::class, 'simpanaccount'])->name('simpanaccount');

        Route::get("/artikel", [ArtikelController::class, "adminArtikel"])->name('artikel')->middleware(['auth', 'akses:admin']);

        Route::delete('/user-result/{editusertesdata}', [AdminController::class, 'historyDestroy'])->name('admin.userresult.destroy')->middleware(['auth', 'akses:admin']);
        Route::get("/user-profile", [AdminController::class, "showUser"])->name('admin.userprofile')->middleware(['auth', 'akses:admin']);
        Route::get("/user-profile/add-user", [AdminController::class, "showAddUser"])->name('admin.show.adduser')->middleware(['auth', 'akses:admin']);
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
