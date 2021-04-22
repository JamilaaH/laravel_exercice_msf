<?php

use App\Http\Controllers\AllController;
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

//front
Route::get('/', [AllController::class, 'index'])->name('home');
Route::get('/batiment', [AllController::class, 'batiment'])->name('batiment');
Route::get('/formation', [AllController::class, 'formation'])->name('formation');
Route::get('/typeformation', [AllController::class, 'typeformation'])->name('typeformation');
Route::get('/eleves', [AllController::class, 'eleve'])->name('eleve');

//admin 
Route::get('/admin', function () {
    return view('backoffice.admin');
})->name('admin');

