<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\BookingController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Hotel routes start
    Route::get('/hotel/index', [HotelController::class, 'index'])->name('hotel.index');
    Route::get('/hotel/create', [HotelController::class, 'create'])->name('hotel.create');
    Route::Post('/hotel/store', [HotelController::class, 'store'])->name('hotel.store');
    Route::get('/hotel/edit/{id}', [HotelController::class, 'edit'])->name('hotel.edit');
    Route::Patch('/hotel/update/{id}', [HotelController::class, 'update'])->name('hotel.update');
    Route::get('/hotel/destroy/{id}', [HotelController::class, 'destroy'])->name('hotel.destroy');
    // Hotel routes end

    // RoomType routes start
    Route::get('/roomtype/index', [RoomTypeController::class, 'index'])->name('roomtype.index');
    Route::get('/roomtype/create', [RoomTypeController::class, 'create'])->name('roomtype.create');
    Route::Post('/roomtype/store', [RoomTypeController::class, 'store'])->name('roomtype.store');
    Route::get('/roomtype/edit/{id}', [RoomTypeController::class, 'edit'])->name('roomtype.edit');
    Route::Patch('/roomtype/update/{id}', [RoomTypeController::class, 'update'])->name('roomtype.update');
    Route::get('/roomtype/destroy/{id}', [RoomTypeController::class, 'destroy'])->name('roomtype.destroy');
    // RoomType routes end
    // RoomType routes start
    Route::get('/room/index', [RoomController::class, 'index'])->name('room.index');
    Route::get('/room/create', [RoomController::class, 'create'])->name('room.create');
    Route::Post('/room/store', [RoomController::class, 'store'])->name('room.store');
    Route::get('/room/edit/{id}', [RoomController::class, 'edit'])->name('room.edit');
    Route::Patch('/room/update/{id}', [RoomController::class, 'update'])->name('room.update');
    Route::get('/room/destroy/{id}', [RoomController::class, 'destroy'])->name('room.destroy');
    // RoomType routes end



    // Guest routes start
    Route::get('/guest/index', [GuestController::class, 'index'])->name('guest.index');
    Route::get('/guest/create', [GuestController::class, 'create'])->name('guest.create');
    Route::Post('/guest/store', [GuestController::class, 'store'])->name('guest.store');
    Route::get('/guest/edit/{id}', [GuestController::class, 'edit'])->name('guest.edit');
    Route::Patch('/guest/update/{id}', [GuestController::class, 'update'])->name('guest.update');
    Route::get('/guest/destroy/{id}', [GuestController::class, 'destroy'])->name('guest.destroy');
    // Guest routes end

    // Booking routes start
    Route::get('/booking/index', [BookingController::class, 'index'])->name('booking.index');
    Route::get('/booking/index2', [BookingController::class, 'index2'])->name('booking.index2');
    Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
    Route::Post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
    Route::get('/booking/edit/{id}', [BookingController::class, 'edit'])->name('booking.edit');
    Route::Patch('/booking/update/{id}', [BookingController::class, 'update'])->name('booking.update');
    Route::get('/booking/destroy/{id}', [BookingController::class, 'destroy'])->name('booking.destroy');

    // Booking routes end
});

require __DIR__ . '/auth.php';
