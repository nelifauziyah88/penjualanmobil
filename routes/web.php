<?php

use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListItemController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php

Route::get('/welcome', function () {
    return view('welcome');
});

// routes/web.php

Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});

// routes/web.php

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});


//Route::get('/listbarang/{id}/{nama}', function($id, $nama){
//    return view('list_barang', compact('id', 'nama'));
//});

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

// Route web php pbl


Route::get('/list_item', [ListItemController::class, 'index']);

// Route web php pbl smtr 1
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup.form');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.process');
