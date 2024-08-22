<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('mustawak/index',[LandingPageController::class, 'index']);
Route::get('mustawak/regestration_form',[LandingPageController::class, 'create']);
Route::post('store_form',[LandingPageController::class, 'sendStudentData'])->name('store_form');

