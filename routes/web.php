<?php

use App\Http\Controllers\PersonRecordController;
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

Route::controller(PersonRecordController::class)
    ->name('person-record.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/person-record/create', 'create')->name('create');
    });
