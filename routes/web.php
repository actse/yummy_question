<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserDataController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;

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
    return Inertia::render('Info');
})->name('home');

Route::post('/saveUserData', [UserDataController::class, 'saveUserData']);

Route::get('/question', function (Request $request) {

    return Inertia::render('Question', [
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'token' => $request->token,
    ]);

})->name('question');

Route::post('/saveQuestion', [UserDataController::class, 'saveQuestion']);

Route::get('/success', function (Request $request) {

    return Inertia::render('Question', [
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'token' => $request->token,
    ]);

})->name('success');

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
