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



require __DIR__.'/auth.php';


route::get('admin/dashboard', [HomeController::class,'index'])->middleware(['auth', 'admin'])->name('admin.dashboard');;

route::get('admin/create', [HomeController::class,'create'])->middleware(['auth', 'admin'])->name('admin.create');
route::post('admin/store', [HomeController::class,'store'])->middleware(['auth', 'admin'])->name('admin.store');
route::get('admin/show', [HomeController::class,'show'])->middleware(['auth', 'admin'])->name('admin.show');
route::get('admin/edit', [HomeController::class,'edit'])->middleware(['auth', 'admin'])->name('admin.edit');
route::put('admin/update', [HomeController::class,'update'])->name('admin.update');
route::get('admin/destroy', [HomeController::class,'destroy'])->name('admin.destroy');