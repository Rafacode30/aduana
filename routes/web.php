<?php

use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PackageController::class, 'index'])->name('packages.index');
Route::get('/packages', [PackageController::class, 'packages'])->name('packages.packages');
