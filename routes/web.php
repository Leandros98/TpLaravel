<?php

use App\Http\Controllers\ProfileController;
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
Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function(){
    Route::resource('property',\App\Http\Controllers\Admin\PropertyController::class)->except(['show']);
    Route::resource('option',\App\Http\Controllers\Admin\OptionController::class)->except(['show']);
    Route::resource('', \App\Http\Controllers\Admin\HomeAdminController::class)
    ->except(['show', 'create', 'store', 'edit', 'update', 'destroy']);
});

require __DIR__.'/auth.php';
