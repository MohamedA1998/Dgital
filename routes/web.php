<?php

use App\Http\Controllers\ProfileController;
use App\Models\Message;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

Route::prefix('/')->name('front.')->group(function () {
    Route::view('', 'front.index')->name('index');
    Route::view('about', 'front.about')->name('about');
    Route::view('contact', 'front.contact')->name('contact');
    Route::view('projects', 'front.projects')->name('projects');
    Route::view('services', 'front.services')->name('services');
    Route::view('team', 'front.team')->name('team');
    Route::view('testmonials', 'front.testmonials')->name('testmonials');
});

Route::prefix('/admin/')->name('admin.')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::view('', 'admin.index')->name('index');
        Route::view('settings', 'admin.settings.index')->name('settings');
        Route::view('skills', 'admin.skills.index')->name('skills');
        Route::view('subscribers', 'admin.subscribers.index')->name('subscribers');
        Route::view('counters', 'admin.counters.index')->name('counters');
        Route::view('services', 'admin.services.index')->name('services');
        Route::view('messages', 'admin.messages.index')->name('messages');
        Route::view('categorys', 'admin.categorys.index')->name('categorys');
        Route::view('projects', 'admin.projects.index')->name('projects');
    });
});

Route::view('login', 'admin.auth.login')->middleware('guest')->name('login');
