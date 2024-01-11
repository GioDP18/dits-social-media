<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\LikesController;
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
Route::get('/register', function () {
    return view('/components/pages/registerPage/registerPage');
})->name('register');
Route::post('/register', [UserController::class, 'store'])->name('users.store');
Route::post('/login', [UserController::class, 'authenticate'])->name('users.authenticate');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/home', [PostsController::class, 'getPosts'])->name('home');
    Route::post('/uploadPost', [PostsController::class, 'uploadPost']);
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/update/{id}', [UserController::class, 'updateProfile'])->name('update');
    Route::put('/update-profile/{id}', [UserController::class, 'submitupdateProfile'])->name('submitUpdate');
    Route::post('/like', [LikesController::class, 'like'])->name('like');
    Route::get('comments/{id}', [CommentsController::class, 'retrieveComments'])->name('comments');
    Route::post('send/comment', [CommentsController::class, 'sendComment'])->name('sendComment');
    Route::get('visitProfile/{id}', [PostsController::class, 'visitProfile'])->name('visitProfile');
});







