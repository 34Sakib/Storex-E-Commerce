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
})->name('welcome');

Route::get('/features', function () {
    return view('user.pages.features');
})->name('features');
Route::get('/try', function () {
    return view('user.pages.try');
})->name('try');

Route::get('/pricing', function () {
    return view('user.pages.pricing');
})->name('pricing');

//e-commerce
Route::get('/e-commerce-login', function () {
    return view('user.pages.e-commerce-login');
})->name('e-commerce-login');

Route::get('/e-commerce-forgetpass', function () {
    return view('user.pages.e-commerce-forgetpass');
})->name('e-commerce-forgetpass');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
