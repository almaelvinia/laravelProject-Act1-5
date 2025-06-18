<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\AuthCheck;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

// Auth

    // View
    Route::get('/students', [StudentController::class, 'myView'])->name('std.myView');
    // Create
    Route::post('/add-new', [StudentController::class, 'addNewStudent'])->name('std.addNewStudent');
    // PUT
    Route::get('/student/update/{id}', [StudentController::class, 'updateView'])->name('std.updateView');
    Route::post('/update', [StudentController::class, 'updateME'])->name('std.studentUpdate');
    // DELETE
    Route::get('/delete/{id}', [StudentController::class, 'deleteME'])->name('std.studentDelete');
    
    
    