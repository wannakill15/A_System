<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/appointments', function () {
    return view('admin.appointmentList');
});

Route::get('/appointments/create', function () {
    return view('admin.appointmentCreate');
});

Route::post('/appointments', [AppointmentController::class, 'store']);

Route::delete('/appointments/delete/{id}', [AppointmentController::class, 'destroy']);
