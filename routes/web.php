<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ItemDatatable;
use App\Http\Controllers;


Route::get('/r', function () {
    return view('r');
});


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'manage'])->name('dashboard');


//Route::get('/r', [App\Http\Controllers\ItemController::class, 'manage'])->name('/items.manage');
Route::get('/users/manage', [App\Http\Controllers\UserController::class, 'manage'])->name('/users.manage');
Route::resource('users', App\Http\Controllers\UserController::class);


Route::get('/services/manage', [App\Http\Controllers\ServiceController::class, 'manage'])->name('/services.manage');
Route::resource('services', App\Http\Controllers\ServiceController::class);

Route::get('/items/manage', [App\Http\Controllers\ItemController::class, 'manage'])->name('/items.manage');
Route::resource('items', App\Http\Controllers\ItemController::class);

Route::get('/types/manage', [App\Http\Controllers\TypeController::class, 'manage'])->name('/types.manage');
Route::resource('types', App\Http\Controllers\TypeController::class);

Route::get('/cities/manage', [App\Http\Controllers\CityController::class, 'manage'])->name('/cities.manage');
Route::resource('cities', App\Http\Controllers\CityController::class);

Route::get('/districts/manage', [App\Http\Controllers\DistrictController::class, 'manage'])->name('/districts.manage');
Route::resource('districts', App\Http\Controllers\DistrictController::class);

Route::get('/timeframes/manage', [App\Http\Controllers\TimeFrameController::class, 'manage'])->name('/time-frames.manage');
Route::resource('timeframes', App\Http\Controllers\TimeFrameController::class);

Route::get('/orders/manage', [App\Http\Controllers\OrderController::class, 'manage'])->name('/orders.manage');
Route::resource('orders', App\Http\Controllers\OrderController::class);
Route::get('orders/reports/invoice/{order}', [App\Http\Controllers\OrderController::class, 'invoice']);

Route::get('settings', [App\Http\Controllers\SettingController::class, 'index'])->name('settings.index');
Route::post('settings', [App\Http\Controllers\SettingController::class, 'update'])->name('settings.update');

Route::get('/roles/manage', [App\Http\Controllers\RoleController::class, 'manage']);
Route::resource('roles', RoleController::class);


Route::resource('order_services', App\Http\Controllers\OrderServiceController::class);


Route::get('/logout', function(){
    if (Auth::user()->is_active==0){
        Auth::logout();
        return Redirect::to('login');
    }
    return Redirect::to('home');
});


//Route::get('livewire-datatables', [App\Http\Controllers\UserController::class, 'manage'])->name('/users.manage');

//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');
//
//require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
