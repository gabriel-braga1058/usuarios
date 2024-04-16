<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

require __DIR__.'/auth.php';


route::get('admin/dashboard', [HomeController::class,'index'])->middleware(['auth', 'admin']);

route::get('/conta-conta', [HomeController::class,'create'])->name('conta.crate');
route::get('/store-conta', [HomeController::class,'store'])->name('conta.store');
route::post('/show-conta', [HomeController::class,'show'])->name('conta.show');
route::get('/edit-conta', [HomeController::class,'edit'])->name('conta.edit');
route::put('/update-conta', [HomeController::class,'update'])->name('conta.update');
route::get('/destroy-conta', [HomeController::class,'destroy'])->name('conta.destroy');