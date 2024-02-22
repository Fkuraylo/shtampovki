<?php
use App\Http\Controllers\ProductController;
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

//git test comment111
Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
