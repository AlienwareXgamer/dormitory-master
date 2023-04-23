<?php

use App\Http\Controllers\StatusController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\PendingContractController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LeaveContractController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomedController;
use App\Http\Controllers\AroomController;
use App\Http\Controllers\ArchiveController;
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
Route::get('/pending-contracts', [PendingContractController::class, 'index'])->name('pendingcontracts.index');
Route::post('/pending-contracts/approve/{id}', [PendingContractController::class, 'approve'])->name('pendingcontracts.approve');
Route::post('/pending-contracts/disapprove/{id}', [PendingContractController::class, 'disapprove'])->name('pendingcontracts.disapprove');

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');

Route::get('/statuses', [StatusController::class, 'index'])->name('statuses.index');

Route::get('/rooms/{room}/tenants/create', [TenantController::class, 'create'])->name('tenants.create');
Route::post('/rooms/{room}/tenants', [TenantController::class, 'store'])->name('tenants.store');

Route::get('/tenants/{tenant}/edit', [TenantController::class, 'edit'])->name('tenants.edit');

Route::get('/tenants/{tenant}/view', [TenantController::class, 'view'])->name('tenants.view');

Route::put('/tenants/{tenant}', [TenantController::class, 'update'])->name('tenants.update');
Route::delete('/tenants/{tenant}', [TenantController::class, 'destroy'])->name('tenants.destroy');

Route::put('/tenants/{tenant}/update-status', [TenantController::class,'updateStatus'])->name('tenants.update-status');

Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');

Route::get('/service_requests', [ServiceRequestController::class, 'index'])->name('service_requests.index');
Route::post('/service_requests', [ServiceRequestController::class, 'store'])->name('service_requests.store');
Route::put('/service_requests/{serviceRequest}', [ServiceRequestController::class, 'update'])->name('service_requests.update');
Route::post('/service_requests/{serviceRequest}/progress_reports', [ServiceRequestController::class, 'addProgressReport'])->name('service_requests.progress_reports.store');

Route::get('/contracts', [ContractController::class, 'index'])->name('contracts.index');
Route::get('/contracts/create', [ContractController::class, 'create'])->name('contracts.create');
Route::post('/contracts', [ContractController::class, 'store'])->name('contracts.store');

Route::get('/leave-contracts', [LeaveContractController::class, 'index'])->name('leave_contracts.index');
Route::get('/leave-contracts/create', [LeaveContractController::class, 'create'])->name('leave_contracts.create');
Route::post('/leave-contracts', [LeaveContractController::class, 'store'])->name('leave_contracts.store');

Route::get('/landing', [LandingController::class, 'index'])->name('landing.index');


Route::get('/roomeds', [RoomedController::class, 'index'])->name('roomeds.index');
    Route::get('/roomeds/{roomed}/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
    Route::post('/roomeds/{roomed}/reservations', [ReservationController::class, 'store'])->name('reservations.store');
    Route::get('/reservations/{reservation}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
    Route::put('/reservations/{reservation}', [ReservationController::class, 'update'])->name('reservations.update');
    Route::delete('/reservations/{reservation}', [ReservationController::class, 'destroy'])->name('reservations.destroy');

    Route::get('/arooms', [AroomController::class, 'index'])->name('arooms.index');
    Route::get('/arooms/{aroom}/archives/create', [ArchiveController::class, 'create'])->name('archives.create');
    Route::post('/arooms/{aroom}/archives', [ArchiveController::class, 'store'])->name('archives.store');
    Route::get('/archives/{archive}/edit', [ArchiveController::class, 'edit'])->name('archives.edit');
    Route::put('/archives/{archive}', [ArchiveController::class, 'update'])->name('archives.update');
    Route::delete('/archives/{archive}', [ArchiveController::class, 'destroy'])->name('archives.destroy');

    // Route::get('/rooms', [LogStatusController::class, 'index'])->name('logstatuses.index');

    // Route::get('/', 'LogStatusController@index')->name('log_statuses.index');
    // Route::get('/create', 'LogStatusController@create')->name('log_statuses.create');
    // Route::post('/', 'LogStatusController@store')->name('log_statuses.store');
    // Route::get('/{id}/edit', 'LogStatusController@edit')->name('log_statuses.edit');
    // Route::put('/{id}', 'LogStatusController@update')->name('log_statuses.update');
    // Route::delete('/{id}', 'LogStatusController@destroy')->name('log_statuses.destroy');






