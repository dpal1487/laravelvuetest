<?php

use App\Http\Controllers\EmployeeController;
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


    Route::controller(EmployeeController::class)->group(function () {
        Route::prefix('employee')->group(function(){
            Route::get('' , 'index')->name('employee.index');
            Route::get('create' , 'create')->name('employee.create');
            Route::post('store' , 'store')->name('employee.store');
            Route::get('/{id}/edit' , 'edit')->name('employee.edit');
            Route::get('/{id}' ,'show')->name('employee.show');
            Route::post('{id}/update' , 'update')->name('employee.update');
            Route::delete('/{id}' ,'destory')->name('employee.delete');
        });
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
