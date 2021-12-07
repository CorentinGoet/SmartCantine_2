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

Route::get('/', [App\Http\Controllers\ProjectController::class, 'index'])->name('project.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/project', [App\Http\Controllers\ProjectController::class, 'index']) -> name("project.show");
Route::get('/mesures/{cantine}', [App\Http\Controllers\MesuresController::class, 'index']) -> name("mesures.show");
Route::get('/new_login', function (){
    return view('auth.new_login');
});
