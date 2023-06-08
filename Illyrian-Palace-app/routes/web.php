<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StaffDepartment;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\BookingController; 
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PageController;

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
Route::get('page/about-us',[PageController::class,'about_us']);
Route::get('/', [HomeController::class, 'home'] );

// admin dashboard
Route::get('admin/login', [AdminController::class, 'login']);
Route::post('admin/login', [AdminController::class, 'checkLogin']);
Route::get('admin/logout', [AdminController::class, 'logout']);

// Add routes for manager login and logout
Route::get('manager/login', [AdminController::class, 'login']);
Route::post('manager/login', [AdminController::class, 'checkLogin']);
Route::get('manager/logout', [AdminController::class, 'logout']);

Route::get('admin', function () {
    return view('dashboard');
});

// Manager dashboard
Route::get('manager', function () {
    return view('dashboardm');
});
// Route::get('manager/loginm',  [ManagerController::class, 'login']);
// Route::post('manager/loginm',  [ManagerController::class, 'check_login']);
// Route::get('manager/logout',  [ManagerController::class, 'logout']);

// RoomType Routes

Route::get('admin/roomtype/{id}/delete', [RoomtypeController::class, 'destroy']);
Route::resource('admin/roomtype', RoomtypeController::class);

//Room Routes
Route::get('admin/rooms/{id}/delete', [RoomController::class, 'destroy']);
Route::resource('admin/rooms', RoomController::class);

//Customer
Route::get('admin/customer/{id}/delete', [CustomerController::class, 'destroy']);
Route::resource('admin/customer', CustomerController::class);

//Department
Route::get('manager/department/{id}/delete', [StaffDepartment::class, 'destroy']);
Route::resource('manager/department', StaffDepartment::class);

//Staff payment (Rrogat)
Route::get('manager/staff/payments/{id}',[StaffController::class,'all_payments']);
Route::get('manager/staff/payment/{id}/add',[StaffController::class,'add_payment']);
Route::post('manager/staff/payment/{id}',[StaffController::class,'save_payment']);
Route::get('manager/staff/payment/{id}/{staff_id}/delete',[StaffController::class,'delete_payment']);


//Staff
Route::get('manager/staff/{id}/delete', [StaffController::class, 'destroy']);
Route::resource('manager/staff', StaffController::class);

//Booking
Route::get('admin/booking/{id}/delete',[BookingController::class,'destroy']);
Route::get('admin/booking/available-rooms/{checkin_date}',[BookingController::class,'available_rooms']);
Route::resource('admin/booking',BookingController::class);
