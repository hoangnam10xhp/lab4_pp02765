<?php

use App\Http\Controllers\Api\StaffController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('staff/', [StaffController::class,'index'])->name('staff.index');
Route::post('staff/store', [StaffController::class,'store'])->name('staff.store');
Route::get('staff/show/{id}', [StaffController::class,'show'])->name('staff.show');
Route::get('staff/update/{id}', [StaffController::class,'update'])->name('staff.update');
Route::get('staff/destroy/{id}', [StaffController::class,'destroy'])->name('staff.destroy');