<?php

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

Route::get('/app', function () {
    return view('users.index');
})->name('app.index');

Route::get('/app/show/{id}', [\App\Http\Controllers\UserController::class, 'show'])->name('user.show');
Route::get('/app/edit/{id}', [\App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');

Route::get('/kategori',\App\Http\Livewire\Kategori::class);
