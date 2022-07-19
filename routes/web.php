<?php

use App\Http\Controllers\MembersController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\CooperationsController;
use App\Http\Controllers\OrganizersController;
use App\Http\Controllers\DivisionsController;
use App\Http\Controllers\PositionsController;
use App\Http\Controllers\StudyProgramsController;
use App\Http\Controllers\ServiceCategoriesController;
use App\Http\Controllers\UserLevelsController;
use App\Http\Controllers\PeriodsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatansController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebinarsController;

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
    return view('layouts.landing-page');
});

Route::resource('members', MembersController::class)->middleware(['auth']);
Route::resource('documentation', DocumentationController::class)->middleware(['auth']);
Route::resource('cooperations', CooperationsController::class)->middleware(['auth']);
Route::get('/approved/{id}', [CooperationsController::class,'approved'])->middleware(['auth']);
Route::get('/canceled/{id}', [CooperationsController::class,'canceled'])->middleware(['auth']);
Route::resource('organizers', OrganizersController::class)->middleware(['auth']);
Route::resource('divisions', DivisionsController::class)->middleware(['auth']);
Route::resource('positions', PositionsController::class)->middleware(['auth']);
Route::resource('study_programs', StudyProgramsController::class)->middleware(['auth']);
Route::resource('service_categories', ServiceCategoriesController::class)->middleware(['auth']);
Route::resource('user_levels', UserLevelsController::class)->middleware(['auth']);
Route::resource('periods', PeriodsController::class)->middleware(['auth']);
Route::resource('kegiatans', KegiatansController::class)->middleware(['auth']);
Route::resource('webinars', WebinarsController::class)->middleware(['auth']);
Route::resource('users', UserController::class)->middleware(['auth']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth']);
Route::get('/download/{file}', [CooperationsController::class, 'download'])->middleware(['auth']);
// Route::get('landing_page', function (){
//     return view('layouts.index1');
// });

require __DIR__.'/auth.php';