<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemListController;
use App\Http\Controllers\Add_onController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Customer CRUD
Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/update', [CustomerController::class, 'update'])->name('customer.update');
Route::get('/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');



// Item List CRUD
Route::get('/items', [ItemListController::class, 'index'])->name('items.index');
Route::post('/items', [ItemListController::class, 'store'])->name('items.store');
Route::get('/edit/{id}', [ItemListController::class, 'edit'])->name('items.edit');
Route::put('/update', [ItemListController::class, 'update'])->name('items.update');
Route::get('/delete/{id}', [ItemListController::class, 'delete'])->name('items.delete');

// Add_on CRUD
Route::get('/addons', [Add_onController::class, 'index'])->name('addons.index');
Route::post('/addons', [Add_onController::class, 'store'])->name('addons.store');
Route::get('/edit/{id}', [Add_onController::class, 'edit'])->name('addons.edit');
Route::put('/update', [Add_onController::class, 'update'])->name('addons.update');
Route::get('/delete/{id}', [Add_onController::class, 'delete'])->name('addons.delete');
