<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

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

Route::get('/', [DemoController::class, 'index']);
Route::get('/about', [DemoController::class, 'about']);
Route::get('/contact', [DemoController::class, 'contact']);
Route::get('/search', [DemoController::class, 'search']);


// Route::get('/home', function () {
//     return view('index');
// });


// Route::get('/contact', function () {
//     return view('contact');
// });


// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
