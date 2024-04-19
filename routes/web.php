<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;


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
    Route::get('admin/dashboard', [HomeController::class,'index'])->name('admin.dashboard');

    Route::get('admin/products', [ProductController::class,'index'])->name('admin.products');
    Route::get('admin/products/create', [ProductController::class,'create'])->name('admin/products/create');
    Route::post('admin/products/store', [ProductController::class,'store'])->name('admin/products/store');
    Route::get('admin/products/show', [ProductController::class,'show'])->name('admin/products/show');



   
});


require __DIR__.'/auth.php';


