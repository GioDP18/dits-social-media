<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostsController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('components/pages/homePage/homePage');
});
Route::get('comments/{id}', [CommentsController::class, 'retrieveComments'])->name('comments');
Route::post('send/comment', [CommentsController::class, 'sendComment'])->name('sendComment');
Route::get('profile/{id}', [PostsController::class, 'visitProfile'])->name('visitProfile');
