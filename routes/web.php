<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PemdaController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/pencarian', [HomeController::class, 'pencarian']);

Route::get('/berita', [NewsController::class, 'index']);
Route::get('/pencarianberita', [NewsController::class, 'pencarianBerita']);
Route::get('/beritadaerah', [NewsController::class, 'beritaDaerah']);
Route::get('/beritasatgas', [NewsController::class, 'beritaSatgas']);
Route::get('/detailberita', [NewsController::class, 'detailBerita']);
Route::get('/galeri', [NewsController::class, 'galeri']);
Route::get('/detailgaleri', [NewsController::class, 'detailGaleri']);

Route::get('/tp2dd', [PemdaController::class, 'index']);

Route::group(['prefix' => 'v1'], function(){
    /* Auth routes */
    Route::group(['prefix' => '/home'], function(){
        Route::get('/menu', [HomeController::class, 'menu']);
        Route::get('/highlight', [HomeController::class, 'highlight']);
        Route::get('/highlightdetail', [HomeController::class, 'highlightDetail']);
        Route::get('/pojaknas', [HomeController::class, 'pojaknas']);
        Route::get('/pojaknasdetail', [HomeController::class, 'pojaknasDetail']);
        Route::get('/layanan', [HomeController::class, 'layanan']);
        Route::get('/layanandetail', [HomeController::class, 'layananDetail']);
        Route::get('/kegiatan', [HomeController::class, 'kegiatan']);
        Route::get('/kegiatandetail', [HomeController::class, 'kegiatanDetail']);

        Route::get('/galeri', [HomeController::class, 'galeri']);

        //Route::post('/search', '');
    });

   // Halaman Berita
    Route::get('/berita', [NewsController::class, 'index']);
    Route::get('/berita/kategori', [NewsController::class, 'kategori']);
    Route::post('/pencarianberita', [NewsController::class, 'pencarianBerita']);
    Route::get('/beritadetail', [NewsController::class, 'beritaDetail`']);

    //
    Route::get('/beritajson', [NewsController::class, 'beritajson']);
    Route::get('/kategorijson', [NewsController::class, 'kategorijson']);

});

