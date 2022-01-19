<?php

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


Route::get('testRow/page', [App\Http\Controllers\TestRowController::class,'page'])->name('testRow.page');
Route::get('testRow/count', [App\Http\Controllers\TestRowController::class,'count'])->name('testRow.count');
Route::resource('testRow', App\Http\Controllers\TestRowController::class);  
