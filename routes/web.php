<?php

use App\Http\Controllers\BukusController;
use App\Models\barang;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiswasController;
use App\Http\Controllers\PpdbsController;
use App\Http\Controllers\PenggunasController;
use App\Http\Controllers\TeleponController;
use App\Http\Controllers\ProduksController;
use App\Http\Controllers\KategorisController;
use App\Http\Controllers\ProdutsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PenerbitsController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\PembelisController;
use App\Http\Controllers\TransaksisController;
use App\Models\Order;

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
Route::resource('penggunas',PenggunasController::class);
Route::resource('telepon',TeleponController::class);
Route::resource('kategori',KategorisController::class);
Route::resource('produk',ProduksController::class);
Route::resource('product',ProdutsController::class);
Route::resource('customer',CustomersController::class);
Route::resource('order',OrdersController::class);
Route::resource('penerbit',PenerbitsController::class);
Route::resource('genre',GenresController::class);
Route::resource('buku',BukusController::class);
Route::resource('pembeli',PembelisController::class);
Route::resource('transaksi',TransaksisController::class);



