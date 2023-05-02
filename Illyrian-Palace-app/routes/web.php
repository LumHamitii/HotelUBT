<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomtypeController;

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

Route::get('home', function () {
    return view('home');
});

// admin dashboard

Route::get('admin', function () {
    return view('dashboard');
});

// RoomType Routes

Route::get('admin/roomtype/{id}/delete', [RoomtypeController::class, 'destroy']);
Route::resource('admin/roomtype', RoomtypeController::class);

