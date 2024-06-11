<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect()->route('register');
});
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('/topics', [TopicController::class, 'index'])->name('topics.index');
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');


Route::post('/register', [RegisterController::class, 'register']);

