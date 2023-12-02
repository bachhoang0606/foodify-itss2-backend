<?php

use App\Http\Controllers\LocaleController;

/*
 * Global Routes
 *
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('/home', function () {
    return "oke";
});
Route::get('/', function () {
    return "Root";
});
