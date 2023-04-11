<?php

use App\Http\Controllers\PCController;
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

Route::get('/pc/page1', [PCController::class, 'page1']);
Route::get('/pc/page2', [PCController::class, 'page2']);
Route::get('/pc/page3', [PCController::class, 'page3']);
Route::get('/pc/page4', [PCController::class, 'page4']);
Route::get('/pc/page5', [PCController::class, 'page5']);
Route::get('/pc/page6', [PCController::class, 'page6']);
Route::get('/pc/page7', [PCController::class, 'page7']);
Route::get('/pc/page8', [PCController::class, 'page8']);
Route::get('/pc/page9', [PCController::class, 'page9']);
Route::get('/pc/page10', [PCController::class, 'page10']);
Route::get('/pc/page11', [PCController::class, 'page11']);
Route::get('/pc/page12', [PCController::class, 'page12']);
Route::get('/pc/page13', [PCController::class, 'page13']);
Route::get('/pc/page14', [PCController::class, 'page14']);
Route::get('/pc/page15', [PCController::class, 'page15']);
Route::get('/pc/page16', [PCController::class, 'page16']);
Route::get('/pc/page17', [PCController::class, 'page17']);
Route::get('/pc/page18', [PCController::class, 'page18']);
Route::get('/pc/page19', [PCController::class, 'page19']);
Route::get('/pc/page20', [PCController::class, 'page20']);
Route::get('/pc/page21', [PCController::class, 'page21']);
Route::get('/pc/page22', [PCController::class, 'page22']);
Route::get('/pc/page24', [PCController::class, 'page24']);
