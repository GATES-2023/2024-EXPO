<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuPageController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainView');
});

Route::get('/menus', [MenuController::class, 'index']);


Route::get('/menus', [MenuPageController::class, 'index'])->name('menus');
Route::get('/menus/category/{category}', [MenuPageController::class, 'filterByCategory'])->name('menus.filter');

Route::middleware('auth')->group(function () {
    Route::get('admin/menu', [MenuController::class, 'show'])->name('create-menu');
    Route::post('admin/menu', [MenuController::class, 'store']);
    Route::delete('admin/menu/delete/{menu}', [MenuController::class, 'destroy']);
    Route::put('admin/menu/update/{id}', [MenuController::class, 'update']);
});

Route::middleware('auth')->group(function() {
    Route::get('admin/carousel', [HomeController::class, 'index'])->name('create-carousel');
});

require __DIR__.'/auth.php';
