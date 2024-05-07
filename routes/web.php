<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BoardController;
Route::get('/', function () {
    return view('dashboard');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    Route::get('/job/list', [UserController::class, 'job_list'])->name('job.list');
    Route::get('/board/main', [UserController::class, 'board_main'])->name('board.main');
    Route::get('/board/paint', [UserController::class, 'board_paint'])->name('board.paint');
    Route::get('/board/paint_add', [UserController::class, 'board_add'])->name('board.paint_add');
    Route::get('/board/blast', [UserController::class, 'board_blast'])->name('board.blast');
    Route::get('/employee/add', [UserController::class, 'employee_add'])->name('employee.add');
    Route::get('/employee/analytics', [UserController::class, 'employee_analytics'])->name('employee.analytics');
    
    // main board
    Route::post('/board/main/create', [MainController::class, 'main_create'])->name('main.create');

    // employee
    Route::post('employee/create',[UserController::class,'create']);
    Route::post('employee/edit',[UserController::class,'edit']);
    Route::get('employ/delete/{id}',[UserController::class,'destroy']);
    
    
    // blast
    Route::post('bosrd/blast/create',[BoardController::class,'create']);
    
    // paint
    
    Route::post('board/paint/create',[BoardController::class,'paint_create']);
    

});

require __DIR__.'/auth.php';
