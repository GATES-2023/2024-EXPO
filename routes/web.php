<?php

use App\Http\Controllers\CarouselController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuPageController;
use Illuminate\Support\Facades\Route;



Route::get('/', [CarouselController::class, 'index']);


Route::get('/menus', [MenuPageController::class, 'index'])->name('menus');
Route::get('/menus/category/{category}', [MenuPageController::class, 'filterByCategory'])->name('menus.filter');

Route::middleware('auth')->group(function () {
    Route::get('admin/menu', [MenuController::class, 'show'])->name('create-menu');
    Route::post('admin/menu', [MenuController::class, 'store']);
    Route::delete('admin/menu/delete/{menu}', [MenuController::class, 'destroy']);
    Route::put('admin/menu/update/{id}', [MenuController::class, 'update']);
});

Route::middleware('auth')->group(function () {
    Route::get('admin/carousel', [CarouselController::class, 'show'])->name('create-carousel');
    Route::post('admin/carousel', [CarouselController::class, 'store']);
    Route::delete('admin/carousel/delete/{menu}', [CarouselController::class, 'destroy']);
    Route::put('admin/carousel/update/{id}', [CarouselController::class, 'update']);
});



require __DIR__.'/auth.php';
