<?php

use App\Http\Controllers\CrudController;
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

Route::get('/',[CrudController::class,'index'])->name('index');
Route::get('/nambah',[CrudController::class,'arahstore'])->name('arahstore');
Route::post('/store',[CrudController::class,'arahstore'])->name('store');
