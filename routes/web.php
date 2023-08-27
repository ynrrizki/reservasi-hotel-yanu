<?php

use App\Http\Controllers\Admin\FacilitiesRoomController;
use App\Http\Controllers\Admin\FacilitiesHotelController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Receptionist\ReservationController;
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




Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);


// CLient
Route::get('/', [ClientController::class, 'index'])->name('home');
Route::get('/room', [ClientController::class, 'room'])->name('room');
Route::get('/facilities', [ClientController::class, 'facilities'])->name('facilities');
Route::post('/order', [ClientController::class, 'order'])->name('order');
Route::get('/confirmation', [ClientController::class, 'confirmation'])->name('confirmation');
Route::post('/confirmation', [ClientController::class, 'confirmStore'])->name('confirmation.store');
Route::get('/proof', [ClientController::class, 'proof'])->name('proof');

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    // Admin
    Route::group(['middleware' => 'isAdmin'], function () {
        Route::get('/', fn () => view('pages.admin.index'))->name('admin');

        // Management Room
        Route::get('/room', [RoomController::class, 'index'])->name('admin.room');
        Route::get('/room/create', [RoomController::class, 'create'])->name('room.create');
        Route::post('/room/create', [RoomController::class, 'store'])->name('room.store');
        Route::get('/room/edit/{id}', [RoomController::class, 'edit'])->name('room.edit');
        Route::put('/room/edit/{id}', [RoomController::class, 'update'])->name('room.update');
        Route::get('/room/delete/{id}', [RoomController::class, 'destroy'])->name('room.destroy');

        // Management Facilities Room
        Route::get('/facilities-room', [FacilitiesRoomController::class, 'index'])->name('admin.facilitiesRoom');
        Route::get('/facilities-room/create', [FacilitiesRoomController::class, 'create'])->name('facilitiesRoom.create');
        Route::post('/facilities-room/create', [FacilitiesRoomController::class, 'store'])->name('facilitiesRoom.store');
        Route::get('/facilities-room/edit/{id}', [FacilitiesRoomController::class, 'edit'])->name('facilitiesRoom.edit');
        Route::put('/facilities-room/edit/{id}', [FacilitiesRoomController::class, 'update'])->name('facilitiesRoom.update');
        Route::get('/facilities-room/delete/{id}', [FacilitiesRoomController::class, 'destroy'])->name('facilitiesRoom.destroy');

        // Management Facilities Hotel
        Route::get('/facilities-hotel', [FacilitiesHotelController::class, 'index'])->name('admin.facilitiesHotel');
        Route::get('/facilities-hotel/create', [FacilitiesHotelController::class, 'create'])->name('facilitiesHotel.create');
        Route::post('/facilities-hotel/create', [FacilitiesHotelController::class, 'store'])->name('facilitiesHotel.store');
        Route::get('/facilities-hotel/edit/{id}', [FacilitiesHotelController::class, 'edit'])->name('facilitiesHotel.edit');
        Route::post('/facilities-hotel/edit/{id}', [FacilitiesHotelController::class, 'update'])->name('facilitiesHotel.update');
        Route::get('/facilities-hotel/delete/{id}', [FacilitiesHotelController::class, 'destroy'])->name('facilitiesHotel.destroy');

        // Management User
        Route::resource('/user', UserController::class);
    });

    // Receptionist
    Route::group(['middleware' => 'isReceptionist'], function () {
        // Route::get('/receptionist', fn () => view('pages.receptionist.index'))->name('receptionist');
        Route::get('/reservation', [ReservationController::class, 'index'])->name('receptionist');
        Route::put('/reservation/{id}', [ReservationController::class, 'update'])->name('receptionist.update');
        Route::post('/reservation/date', [ReservationController::class, 'filterByDate'])->name('receptionist.sortDate');
        Route::post('/reservation/name', [ReservationController::class, 'filterByName'])->name('receptionist.sortName');
    });
});

// Auth
Route::group(['middleware' => 'guest'], function () {
    // Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    // Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('auth.login');
});
