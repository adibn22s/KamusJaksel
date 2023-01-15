<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\FundamentalController;
use App\Http\Controllers\Frontsite\BeginnerController;
use App\Http\Controllers\Frontsite\IntermediateController;
use App\Http\Controllers\Frontsite\DetailMateriController;
use App\Http\Controllers\Frontsite\DetailMateriBeginnerController;
use App\Http\Controllers\Frontsite\FaqController;

// backsite 
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\PermissionController;
use App\Http\Controllers\Backsite\RoleController;
use App\Http\Controllers\Backsite\UserController;
use App\Http\Controllers\Backsite\TypeUserController;
use App\Http\Controllers\Backsite\ReportMateriController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/',LandingController::class); 
Route::resource('faq',FaqController::class); 

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

    
Route::resource('fundamental',FundamentalController::class); 
Route::resource('intermediate',IntermediateController::class); 
Route::resource('beginner',BeginnerController::class);
Route::get('Detail-Materi-Fundamental/Materi/{id}', [DetailMateriController::class, 'detailmaterifundamental'])->name('detail-materi.materi3');
Route::get('Detail-Materi-Beginner/Materi/{id}', [DetailMateriBeginnerController::class, 'detailmateribeginner'])->name('detail-materi.beginner');
Route::get('Detail-Materi-Intermediate/Materi/{id}', [DetailMateriController::class, 'detailmateriintermediate'])->name('detail-materi.intermediate');
    
});
Route::group(['prefix' => 'backsite', 'as' => 'backsite.', 'middleware' => ['auth:sanctum', 'verified']], function () {

    // dashboard
    Route::resource('dashboard', DashboardController::class);

    // permission
    Route::resource('permission', PermissionController::class);

    // role
    Route::resource('role', RoleController::class);

    // user
    Route::resource('user', UserController::class);

    // type user
    Route::resource('type_user', TypeUserController::class);

    // event backsite
    Route::resource('materi', ReportMateriController::class);

    
});
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
