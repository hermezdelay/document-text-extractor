<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\UpdateImageController;

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

Route::get('/upload',[HomeController::class,'index']);

Route::post('/upload',[HomeController::class,'upload'])->name('upload');


Route::get('api/upload_image', [UpdateImageController::class,'index']);
Route::post('api/upload_image', [UpdateImageController::class,'upload']);
