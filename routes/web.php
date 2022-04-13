<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\ActivityTypeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TourDetailController;
use App\Http\Controllers\TourListingController;
use Illuminate\Support\Facades\Route;

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

// home
Route::get('/', [IndexController::class, 'index']);

// tour listing
Route::get('/tour-listing', [TourListingController::class, 'index']);
Route::get('/tour-listing/{filter}/{subfilter}', [TourListingController::class, 'filter']);

// about
Route::get('/about', [AboutController::class, 'index']);

// activities
Route::get('/umroh', [ActivitiesController::class, 'umroh']);
Route::get('/hiking-camping', [ActivitiesController::class, 'hikingCamping']);
Route::get('/jungle-safari', [ActivitiesController::class, 'jungleSafari']);
Route::get('/city-tour', [ActivitiesController::class, 'cityTour']);
Route::get('/family-fun', [ActivitiesController::class, 'familyFun']);

// blog
Route::get('/blog', [BlogController::class, 'index']);

// login
Route::get('/login', [LoginController::class, 'index']);

// tour detail
Route::get('/tour-turkey', [TourDetailController::class, 'tourTurkey']);
Route::get('/raja-ampat', [TourDetailController::class, 'rajaAmpat']);
