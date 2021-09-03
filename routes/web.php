<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('user.public');
});


Auth::routes();

Route::group(['middleware' => ['auth']], function () {
	Route::get('/home/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
	
	Route::get('/home/books', [App\Http\Controllers\BookController::class, 'index'])->name('index');
	Route::get('/home/books/add', [App\Http\Controllers\BookController::class, 'create'])->name('create');
	Route::post('/home/books', [App\Http\Controllers\BookController::class, 'store'])->name('store');
	Route::get('/home/book/show/{id}', [App\Http\Controllers\BookController::class, 'show'])->name('show');
	Route::get('/home/book/edit/{id}', [App\Http\Controllers\BookController::class, 'edit'])->name('edit');
	Route::put('/home/book/{id}', [App\Http\Controllers\BookController::class, 'update'])->name('update');
	Route::delete('/home/book/{id}', [App\Http\Controllers\BookController::class, 'destroy'])->name('destroy');

	Route::get('/home/members', [App\Http\Controllers\MemberController::class, 'index'])->name('index');
	Route::get('/home/members/add', [App\Http\Controllers\MemberController::class, 'create'])->name('create');
	Route::post('/home/members', [App\Http\Controllers\MemberController::class, 'store'])->name('store');
	Route::get('/home/member/show/{id}', [App\Http\Controllers\MemberController::class, 'show'])->name('show');
	Route::get('/home/member/edit/{id}', [App\Http\Controllers\MemberController::class, 'edit'])->name('edit');
	Route::put('/home/member/{id}', [App\Http\Controllers\MemberController::class, 'update'])->name('update');
	Route::delete('/home/member/{id}', [App\Http\Controllers\MemberController::class, 'destroy'])->name('destroy');

	Route::get('/home/borrowings', [App\Http\Controllers\BorrowingController::class, 'index'])->name('index');
	Route::get('/home/borrowings/add', [App\Http\Controllers\BorrowingController::class, 'create'])->name('create');
	Route::post('/home/borrowings', [App\Http\Controllers\BorrowingController::class, 'store'])->name('store');
	Route::get('/home/borrowing/show/{id}', [App\Http\Controllers\BorrowingController::class, 'show'])->name('show');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
