<?php


use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResigrationController;
use App\Http\Controllers\ReportApiController;
use Illuminate\Http\Request;
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
//Route::resource('products',ProductController::class);

//Route::get('/products', [ProductController::class, 'index'])->name('products.index');
//Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
//Route::post('/products', [ProductController::class, 'store'])->name('products.store');
//Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
//Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
//Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
//Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/', [ProductController::class, 'store'])->name('store');
    Route::get('/{id}', [ProductController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::put('/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('destroy');
});
