<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/', [HomeController::class,'inicio'])->name('conta.inicio');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth', 'admin')->group(function () {
    Route::get('admin/dashboard', [HomeController::class,'index'])->name('admin.dashboard');;

    Route::get('admin/create', [HomeController::class,'create'])->name('admin.create');
    Route::post('admin/store', [HomeController::class,'store'])->name('admin.store');
    Route::get('admin/show', [HomeController::class,'show'])->name('admin.show');
    Route::get('admin/edit', [HomeController::class,'edit'])->name('admin.edit');
    Route::put('admin/update', [HomeController::class,'update'])->name('admin.update');
    Route::get('admin/destroy', [HomeController::class,'destroy'])->name('admin.destroy');
});


require __DIR__.'/auth.php';


