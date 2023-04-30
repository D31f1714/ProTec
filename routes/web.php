<?php

use App\Http\Controllers\pageController;
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


Route::get('/', [PageController::class, 'home'])-> name('home');

Route::get('signin', [PageController::class, 'signin'])-> name('signin');
*/
route::controller(PageController::class)->group(function(){
    route::get('/', 'home')->name('home');
    route::get('signin', 'signin')->name('signin');
});