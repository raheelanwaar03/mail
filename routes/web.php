<?php

use App\Http\Controllers\email\DataController;
use App\Mail\userEmail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// routes for sending mail

Route::post('/sendEmail',[DataController::class ,'getData'])->name('getData');
