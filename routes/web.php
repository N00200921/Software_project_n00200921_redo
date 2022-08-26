<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DealershipController as UserDealershipController;
use App\Http\Controllers\Admin\DealershipController as AdminDealershipController; 


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



Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('/user/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');

Route::get('/user/dealership/',[UserDealershipController::class, 'index'])->name('user.dealership.index');
Route::get('/user/dealership/{id}', [UserDealershipController::class, 'show'])->name('user.dealership.show');

Route::get('/admin/dealership/', [AdminDealershipController::class, 'index'])->name('admin.dealership.index');
Route::get('/admin/dealership/create', [AdminDealershipController::class, 'create'])->name('admin.dealership.create');
Route::get('/admin/dealership/{id}', [AdminDealershipController::class, 'show'])->name('admin.dealership.show');
Route::post('/admin/dealership/store', [AdminDealershipController::class, 'store'])->name('admin.dealership.store');
Route::get('/admin/dealership/{id}/edit', [AdminDealershipController::class, 'edit'])->name('admin.dealership.edit');
Route::put('/admin/dealership/{id}', [AdminDealershipController::class, 'update'])->name('admin.dealership.update');
Route::delete('/admin/dealership/{id}', [AdminDealershipController::class, 'destroy'])->name('admin.dealership.destroy');