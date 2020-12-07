<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GovernmentController;
use App\Http\Controllers\GovernmentServiceController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\GlossaryController;
use App\Http\Controllers\RegulationController;
use App\Http\Controllers\EventController;

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

Route::get('/galeri', [GalleryController::class, 'galleryVideo']);
Route::get('/detailgalerivideo', [GalleryController::class, 'detailGalleryVideo']);
Route::get('/galerivideo', [GalleryController::class, 'galleryVideo']);
Route::get('/carigalerivideo', [GalleryController::class, 'searchGalleryVideo']);
Route::get('/galerifoto', [GalleryController::class, 'galleryPhoto']);
Route::get('/carigalerifoto', [GalleryController::class, 'searchGalleryPhoto']);
Route::get('/carigalerivideo', [GalleryController::class, 'searchGalleryVideo']);
Route::get('/detailgalerifoto', [GalleryController::class, 'detailGalleryPhoto']);
// TODO : Search Galeri Belum

Route::get('/tp2dd', [GovernmentController::class, 'index']);
Route::get('/detailtp2dd', [GovernmentController::class, 'detailGov']);
// TODO : Search Pemda
// TODO : All + Detail News pemda
Route::get('/beritatp2dd', [GovernmentController::class, 'newsGov']);
Route::get('/cariberitatp2dd', [GovernmentController::class, 'searchNewsGov']);
// TODO : All + Detail layanan pemda
Route::get('/layanantp2dd', [GovernmentController::class, 'servicesGov']);
// TODO : All + Detail galeri pemda
Route::get('/galeritp2dd', [GovernmentController::class, 'galleryGov']);
// TODO : All + Detail kegiatan pemda

Route::get('/layanan', [GovernmentServiceController::class, 'index']);
Route::get('/layananinstansi', [GovernmentServiceController::class, 'servicebyCode']);
Route::get('/detaillayanan', [GovernmentServiceController::class, 'detailServiceGov']);
Route::get('/carilayanan', [GovernmentServiceController::class, 'searchServices']);

Route::get('/faq', [FAQController::class, 'index']);
Route::get('/carifaq', [FAQController::class, 'searchFAQ']);

Route::get('/edukasi', [EducationController::class, 'index']);
Route::get('/detailedukasi', [EducationController::class, 'detailEducation']);
Route::get('/carimateri', [EducationController::class, 'searchEducation']);

Route::get('/daftaristilah', [GlossaryController::class, 'index']);

Route::get('/regulasi', [RegulationController::class, 'index']);
Route::get('/cariregulasi', [RegulationController::class, 'searchRegulation']);

Route::get('/dashboardkegiatan', [EventController::class, 'index']);
Route::get('/kegiatan', [EventController::class, 'allEvent']);
Route::get('/detailkegiatan', [EventController::class, 'getDetailEvent']);
Route::get('/carikegiatan', [EventController::class, 'searchEvent']);







