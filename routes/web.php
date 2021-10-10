<?php

use App\Http\Livewire\Main\Give;
use App\Http\Livewire\Main\Online;
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

/*Route::get('/', function () {
    return redirect('https://live.thetribeabuja.com');
});*/

Route::get('/connect', function () {
    return redirect('https://thetribeabuja.typeform.com/to/Efc7ch');
});

Route::get('/vision', Vision::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vision', Vision::class);
Route::get('/online', Online::class);
Route::get('/give', Give::class);
