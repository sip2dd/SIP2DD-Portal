<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PemdaController;
use App\Http\Controllers\GaleriController;

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


Route::get('/', [HomeController::class, 'index']);
Route::get('/pencarian', [HomeController::class, 'searchNewsServices']);

Route::get('/berita', [NewsController::class, 'index']);
Route::get('/pencarianberita', [NewsController::class, 'searchNews']);
Route::get('/detailberita', [NewsController::class, 'getDetailNews']);
Route::get('/beritaterbaru', [NewsController::class, 'getHighlights']);
Route::get('/beritasatgas', [NewsController::class, 'getGovNews']);
Route::get('/beritadaerah', [NewsController::class, 'getLocalGovNews']);

Route::get('/galeri', [NewsController::class, 'galeri']);
Route::get('/detailgaleri', [NewsController::class, 'detailGaleri']);

Route::get('/galerifoto', [GaleriController::class, 'galeriFoto']);
Route::get('/detailgalerifoto', [GaleriController::class, 'detailGaleriFoto']);

Route::get('/galerivideo', [GaleriController::class, 'galeriVideo']);
Route::get('/detailgalerivideo', [GaleriController::class, 'detailGaleriVideo']);

Route::get('/tp2dd', [PemdaController::class, 'index']);
Route::get('/detailpemda', [PemdaController::class, 'detailPemda']);



