<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ItemData;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/r', function () {
    return view('r');
});
Route::get('/r', [App\Http\Controllers\ItemController::class, 'manage'])->name('/items.manage');


Route::resource('items', App\Http\Controllers\ItemController::class);
Route::get('/items/manage', ItemData::class)->name('items.manage');

//Route::get('livewire-datatables', [App\Http\Controllers\UserController::class, 'manage'])->name('/users.manage');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
