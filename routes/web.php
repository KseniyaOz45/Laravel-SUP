<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/my-orders', [OrdersController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('ordersMenu');
Route::get('/order/{batch_number}', [OrdersController::class, 'order_details'])
    ->middleware(['auth', 'verified'])->name('order');

Route::get('/my-tasks', [TasksController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('tasksMenu');
Route::get('/tasks/{id}', [TasksController::class, 'task_details'])
    ->middleware(['auth', 'verified'])->name('task');

Route::resource('orders', OrdersController::class)->middleware(['auth', 'verified']);
Route::resource('tasks', TasksController::class)->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
