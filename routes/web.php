<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CController;
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

Route::get('/', [CController::class, 'index']);
Route::post('/', [CController::class, 'post']);
Route::get('/verror', [CController::class, 'verror']);

//Route::get('/', function () {return view('index');});
