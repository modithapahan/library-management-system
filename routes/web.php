<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.user.welcome');
});

/* Page Routes */
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function() {
    Route::get('/books', [BooksController::class, 'index'])->name('books');
});


/* AUTH ROUTES */

    //Login Route
Route::get('/user/login', [AuthController::class, 'login_view'])->name('user.login');
Route::post('/user/login', [AuthController::class, 'login'])->name('login');

    //Logout Route
Route::post('/user/logout', [AuthController::class, 'logout'])->name('logout');

    //Register Route
Route::get('/user/register', [AuthController::class, 'register_view'])->name('user.register');
Route::post('user/register', [AuthController::class, 'register'])->name('register');

Route::middleware('Authenticate')->group(function() {
    Route::get('/admin/dashboard', [DashboardController::class, 'index']);
});
// Route::get('/admin/dashboard', [DashboardController::class, 'index']);