<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmContoller;

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


Route::get('film', [App\Http\Controllers\FilmContoller::class, 'index']);
Route::get('film/create', [App\Http\Controllers\FilmContoller::class, 'create']);
Route::post('film/create', [App\Http\Controllers\FilmContoller::class, 'store']);
Route::get('film/{id}/edit', [App\Http\Controllers\FilmContoller::class, 'edit']);
Route::put('film/{id}/edit', [App\Http\Controllers\FilmContoller::class, 'update']);
Route::get('film/{id}/hapus', [App\Http\Controllers\FilmContoller::class, 'destroy']);