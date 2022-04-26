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

Route::middleware(['auth:sanctum', 'verified'])->get('/mesures/{cantine}', [App\Http\Controllers\MesuresController::class, 'index']) -> name("mesures.show");

Route::get('/new_index',  function (){
    return view('SmartCantine.indexv2');
});

Route::get('/api-ttn', [App\Http\Controllers\TTN_API_Controller::class, 'index']) -> name('ttn-api.show');


Route::get('/login1', function (){
    return view('SmartCantine.loginv1');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/mqtt/start', [App\Http\Controllers\MQTTController::class, 'start']) -> name("mqtt.start");
Route::middleware(['auth:sanctum', 'verified'])->get('/mqtt/stop', [App\Http\Controllers\MQTTController::class, 'stop']) -> name("mqtt.stop");
