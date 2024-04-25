<?php

use App\Http\Controllers\DashboardComponentsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('admin/dashboard',function(){
    return Inertia::render('Master');
});


//components routes
Route::get('admin/dashboard',function(){
    return Inertia::render('SampleBody');
});
Route::prefix('admin/dashboard/')->controller(DashboardComponentsController::class)->group(function(){

    Route::get('buttons','buttons')->name('buttons.ui');
    Route::get('dropdowns','dropdowns')->name('dropdowns.ui');
    Route::get('typography','typography')->name('typography.ui');
});

//end component routes


require __DIR__.'/auth.php';
