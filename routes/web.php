<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Nigabyte;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/foodlist', function () {
    return view('foodlist');
})->middleware(['auth', 'verified'])->name('foodlist');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/nigabyte', Nigabyte\Index::class)->name('nigabyte.index');
    // Route::get('/nigabyte', Nigabyte\Index::class)->name('nigabyte.index');
    Route::get('/nigabyte/createfood', Nigabyte\Createfood::class)->name('nigabyte.createfood');
    Route::get('/nigabyte/editFood/{foodId}', Nigabyte\Createfood::class)->name('nigabyte.editfood');
  






});

require __DIR__.'/auth.php';
