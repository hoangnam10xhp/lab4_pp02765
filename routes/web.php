<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create']);
// Thêm dòng dưới đây vào
Route::post('/users/create', [App\Http\Controllers\UserController::class, 'store']);

// Update user
// Nhớ là phải truyền thêm id để biết được đối tượng muốn sửa nhé
Route::get('/users/update/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::post('/users/update/{id}', [App\Http\Controllers\UserController::class, 'update']);

// Delete user
// Vẫn nhớ phải truyền id vào nhá
Route::get('/users/delete/{id}', [App\Http\Controllers\UserController::class, 'delete']);

// Read user
Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);


// Staff
Route::get('/staff/create', [App\Http\Controllers\StaffController::class, 'create']);
Route::post('/staff/create', [App\Http\Controllers\StaffController::class, 'store']);
Route::get('/staff/update/{id}', [App\Http\Controllers\StaffController::class, 'edit']);
Route::post('/staff/update/{id}', [App\Http\Controllers\StaffController::class, 'update']);
Route::get('/staff/delete/{id}', [App\Http\Controllers\StaffController::class, 'delete']);
Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index']);


