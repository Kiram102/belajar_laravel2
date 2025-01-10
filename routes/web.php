<?php

use App\Models\barang;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiswasController;
use App\Http\Controllers\PpdbsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/post', function () {
//     $post = Post::all();
//     return view('tampil_post',compact('post'));
// });

// Route::get('/barang', function () {
//     $barang = barang::where('nama_barang','LIKE','%Wajan%')->get();
//     return view('tapil_barang',compact('barang'));
// });

Route::get('/post',[PostController::class, 'menampilkan']);
Route::get('/barang',[PostController::class, 'menampilkan2']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('siswa', SiswasController::class);
Route::resource('ppdb', PpdbsController::class);

