<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\myController;

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

Route::get('/', [myController::class, 'index']);
Route::get('/{type}/{id}', [myController::class, 'search']);

