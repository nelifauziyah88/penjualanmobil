<?php

use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;

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

// Route web pnl smtr 1
Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/list-of-games', function () {
    return view('list_of_games');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/produk1-pembeli', function () {
    return view('produk1_pembeli');
});

Route::get('/produk2-pembeli', function () {
    return view('produk2_pembeli');
});

Route::get('/produk3-pembeli', function () {
    return view('produk3_pembeli');
});

Route::get('/editprofile', function () {
    return view('editprofile');
});

Route::get('/produk', [ProductController::class, 'index']);

Route::get('/app', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');