<?php

use App\Http\Livewire\Main\Give;
use App\Http\Livewire\Main\Vision;
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
    return redirect('https://live.thetribeabuja.com');
});

Route::get('/give', function () {
    return redirect('https://flutterwave.com/pay/thetribeabuja');
});

Route::get('/vision', function () {
    return redirect('https://flutterwave.com/pay/visionbuilders');
});
