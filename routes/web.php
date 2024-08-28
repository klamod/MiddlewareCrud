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

Route::controller(CrudController::class)->group(function()
{
    //all
    Route::get('/arahstore','arahstore')->name('arahstore');
    Route::post('/store','store')->name('store');
    Route::delete('/delete/{data}','delete')->name('delete');
    //edit section
    Route::get('/arahedit/{data}','arahedit')->name('arahedit');
    Route::put('/edit/{data}', 'edit')->name('proses');

    //indexing
    Route::get('/', 'index')->name('index');
});







//Route::get('/',[CrudController::class,'index'])->name('index');
//Route::get('/arahs',[CrudController::class,'arahstore'])->name('arahstore');
//Route::post('/store',[CrudController::class,'store'])->name('store');
