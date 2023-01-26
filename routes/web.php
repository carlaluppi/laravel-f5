<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EventController;

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
    return view('home');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('events', 'EventController');

Route::get('/event', [EventController::class, 'index'])->name('events.index');
Route::get('/event/create',[EventController::class, 'create'])->name('events.create');
Route::post('/event',[EventController::class, 'store'])->name('events.store'); 
Route::get('/event/{events}',[EventController::class, 'show'])->name('events.show'); 
Route::get('/event/{events}/edit',[EventController::class, 'edit'])->name('events.edit');
Route::patch('/event/{events}',[EventController::class, 'update'])->name('events.update'); 
Route::delete('/event/{events}',[EventController::class, 'destroy'])->name('events.destroy'); 