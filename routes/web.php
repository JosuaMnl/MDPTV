<?php

use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\CooperationsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('documentation', DocumentationController::class);

Route::resource('cooperations', CooperationsController::class);

Route::get('/approved/{id}', [CooperationsController::class,'approved']);

Route::get('/canceled/{id}', [CooperationsController::class,'canceled']);