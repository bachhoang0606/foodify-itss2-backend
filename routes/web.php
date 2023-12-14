<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\CommentController;
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



Route::group(['middleware' => ['cors']], function () {
    Route::get('/', function () {
        return 'App is running in home';
    });

    Route::get('/info', function () {
        phpinfo();
    });

    Route::get('/home', [HomeController::class, 'home']);
    
    Route::prefix('food')->group(function () {
        Route::get('/search', [FoodController::class, 'search']);

        Route::prefix('/{food}')->group(function () {
            Route::get('/', [FoodController::class, 'show']);
            Route::get('/comments', [CommentController::class, 'index']);
            Route::post('/comments/save', [CommentController::class, 'store']);
        });
    });
});
