<?php

use App\Http\Controllers\HouseRentController;
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


Route::get('/predict', [HouseRentController::class, 'showForm']);
Route::post('/predict-rent', [HouseRentController::class, 'predictRent']);