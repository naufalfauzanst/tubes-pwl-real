<?php

use App\Http\Controllers\HalamanController;
// use App\Http\Controllers\SessionController;
use App\Http\Controllers\SiswaController;
use Illuminate\contracts\Session\Session;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/dunia', function () {
    return view('dunia.index');
});
Route::get('/olahraga', function () {
    return view('olahraga.index');
});

Route::get('/admin/kategori', [KategoriController::class, 'index'])->name('kategori_utama');
Route::get('/admin/tambah_kategori', [KategoriController::class, 'tambah_kategori'])->name('kategori');
Route::get('/tambah-kategori', [KategoriController::class, 'create'])->name('tambah-kategori');
Route::post('/tambah-kategori', [KategoriController::class, 'store'])->name('store-kategori');
Route::post('/kategori/tambah', [KategoriController::class, 'tambah'])->name('tambah');
Route::get('/admin/{id}/kategori_edit', [KategoriController::class,'edit_kategori'])->name('kategori_edit');
Route::put('/admin/{id}', [KategoriController::class, 'edit_kat'])->name('edit_katt');
Route::delete('/admin/{id}', [KategoriController::class, 'hapus'])->name('hapuss');

// Route::get('/admin/kategori_edit/{id}/edit', [KategoriController::class, 'edit_post'])->name('posts.edit');


Route::get('/admin/pengelola_berita', [AdminController::class, 'show_postingan']);

Route::get('/hiburan/tambah', function () {
    return view('tambah.index');
});
Route::get('/bisnis', function () {
    return view('bisnis.index');
});
Route::get('/teknologi', function () {
    return view('teknologi.index');
});
Route::get('/intro', function () {
    return view('intro');
});
Route::get('/cs', function () {
    return view('cs');
});
Route::get('/terkini', function () {
    return view('terkini.index');
});
Route::get('/politik', function () {
    return view('politik.index');
});
Route::get('/wisata', function () {
    return view('wisata.index');
});
Route::get('/kriminal', function () {
    return view('kriminal.index');
});
// Route::get('pengguna/login', function () {
//     return view('pengguna/login');
// });
// Route::get('/admin', function () {
//     return view('admin.admin');
// });
// Route::post('/login', function () {
//     return view('pengguna.login');
// });
// Route::get('user/register', function () {
//     return view('pengguna.register');
// });
Route::middleware('guest')->group(function () {
    
    Route::get('user/register', [RegisterController::class, 'index']);
    Route::post('user/register', [RegisterController::class,'store']);

    Route::get('pengguna/login', [LoginController::class, 'index']);
    Route::post('pengguna/login', [LoginController::class, 'authenticate']);    
    
});
Route::post('pengguna/logout', [LoginController::class, 'logout']);


Route::get('/admin', [AdminController::class, 'index']);
Route::get('admin/komentar', [AdminController::class, 'komentar']);
// Route::get('admin/pengelola_berita', [AdminController::class, 'pengelola_berita']);
Route::get('admin/pengguna', [AdminController::class, 'pengguna']);
Route::get('admin/tambah_pengguna', [AdminController::class, 'tambah_pengguna']);
Route::get('admin/edit_profil', [AdminController::class, 'edit_profil']);
Route::get('/admin/create_post',[AdminController::class, 'create_post']);
Route::post('/admin/store_post',[AdminController::class, 'store_post']);
Route::post('/admin/store_users',[AdminController::class, 'store_users'])->name('store_users');
// Route::get('/admin/postingan', [AdminController::class, 'show_postingan']);
// Route::get('/admin', 'AdminController@index')->name('admin');


// Route::get('user/login', function () {
//          return view('auth.login');
// });



// Route::get(' /register', function () {
//     return view('auth.register');
// });
Route::resource('kategori', KategoriController::class);
// Route::post('/kategori/tambah', [KategoriController::class, 'store'])->name('store-kategori');

Route::resource('post', AdminController::class);