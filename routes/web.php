<?php

use App\Http\Controllers\MembersController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\OrganizersController;
use App\Http\Controllers\DivisionsController;
use App\Http\Controllers\PositionsController;
use App\Http\Controllers\StudyProgramsController;
use App\Http\Controllers\ServiceCategoriesController;
use App\Http\Controllers\UserLevelsController;
use App\Http\Controllers\PeriodsController;
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

Route::resource('members', MembersController::class);
Route::resource('documentation', DocumentationController::class);
Route::resource('organizers', OrganizersController::class);
Route::resource('divisions', DivisionsController::class);
Route::resource('positions', PositionsController::class);
Route::resource('study_programs', StudyProgramsController::class);
Route::resource('service_categories', ServiceCategoriesController::class);
Route::resource('user_levels', UserLevelsController::class);
Route::resource('periods', PeriodsController::class);