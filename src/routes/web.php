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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [CollaboratorRequestController::class, 'index'])->name('requests.index');
Route::post('/comfirm', [CollaboratorRequestController::class, 'confirm'])->name('requests.confirm');
Route::resource('requests', CollaboratorRequestController::class)->except(['index']);

require __DIR__.'/auth.php';
