<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

Route::group(['prefix' => 'v1'], function(){
    /* Auth routes */
    Route::group(['prefix' => '/home'], function(){
        Route::get('/menu', [HomeController::class, 'menu']);
        Route::get('/highlight', [HomeController::class, 'highlight']);
        Route::get('/pojaknas', [HomeController::class, 'pojaknas']);
        Route::get('/layanan', [HomeController::class, 'layanan']);
        Route::get('/galeri', [HomeController::class, 'galeri']);
        Route::get('/event', [HomeController::class, 'event']);

        //Route::post('/search', '');
    });

});