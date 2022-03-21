<?php

use App\Http\Controllers\DealerController;
use Illuminate\Support\Facades\Route;

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

Route::get('index',[DealerController::class,'index'])->name('dealers.index');
Route::get('create',[DealerController::class,'create'])->name('dealers.create');
Route::post('store',[DealerController::class,'store'])->name('dealers.store');
Route::get('/index/{id}/show',[DealerController::class,'show'])->name('dealers.show');
Route::get('/index/{id}/update',[DealerController::class,'edit'])->name('dealers.edit');
Route::post('/index/{id}/update',[DealerController::class,'update'])->name('dealers.update');
Route::get('/index/{id}/destroy',[DealerController::class,'destroy'])->name('dealers.destroy');
Route::get('/search',[DealerController::class,'search'])->name('dealers.search');
