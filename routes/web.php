<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('components/pages/homePage/homePage');
});


Route::get('/register', function(){
    return view('/components/pages/registerPage/registerPage');
});

Route::post('/components/pages/registerPage/registerPage', [UserController::class, 'store'])->name('users.store');

