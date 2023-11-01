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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/users',[UserController::class,'index'])->middleware(['auth','admin'])->name('users');
Route::get('/users/profile/{user}',[UserController::class,'show'])->name('users.show');
Route::get('/users/{user}',[UserController::class,'edit'])->middleware(['auth'])->name('users.edit');
Route::get('/users/{user}',[UserController::class,'update'])->middleware(['auth'])->name('users.update');



require __DIR__.'/auth.php';
