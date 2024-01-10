<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function(){
    return view('/components/pages/loginPage/loginPage');
})->name('login');

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/home', [PostsController::class, 'getPosts']);
    Route::post('/uploadPost', [PostsController::class, 'uploadPost']);
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});


Route::get('/register', function () {
    return view('/components/pages/registerPage/registerPage');
})->name('register');

Route::post('/register', [UserController::class, 'store'])->name('users.store');


Route::post('/login', [UserController::class, 'authenticate'])->name('users.authenticate');


Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/update/{id}', [UserController::class, 'updateProfile'])->name('update');
Route::put('/update-profile/{id}', [UserController::class, 'submitupdateProfile'])->name('submitUpdate');
Route::get('/profile-timeline/{id}', [UserController::class, 'getPosts'])->name('timeline');