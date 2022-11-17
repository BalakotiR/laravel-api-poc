<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::get('/dashboard', [DashboardController::class, 'dhome'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboardCount', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboardCount');

require __DIR__.'/auth.php';
