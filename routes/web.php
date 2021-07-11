<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ItemDatatable;



Route::get('/', function () {
    return view('welcome');
});



Route::get('/r', function () {
    return view('r');
});
//Route::get('/r', [App\Http\Controllers\ItemController::class, 'manage'])->name('/items.manage');
Route::get('/users/manage', [App\Http\Controllers\UserController::class, 'manage'])->name('/users.manage');
Route::resource('users', App\Http\Controllers\UserController::class);


Route::get('/services/manage', [App\Http\Controllers\ServiceController::class, 'manage'])->name('/services.manage');
Route::resource('services', App\Http\Controllers\ServiceController::class);

//Route::get('/users/manage', function () {
//    return view('users.manage');
//});

Route::resource('items', App\Http\Controllers\ItemController::class);
Route::get('/items/manage', [App\Http\Controllers\ItemController::class, 'manage'])->name('/items.manage');

//Route::get('/items/manage', function () {
//    return view('items/manage');
//});
//Route::get('livewire-datatables', [App\Http\Controllers\UserController::class, 'manage'])->name('/users.manage');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
