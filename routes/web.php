<?php

use App\Events\Notificattion;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/notfication', function () {
    broadcast(new Notificattion());

});


Route::get('/notficationprivate', function () {
    broadcast(new \App\Events\notificationPrivate());
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/test', [ProfileController::class, 'test'])->name('profile.test');
});

require __DIR__.'/auth.php';
