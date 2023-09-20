<?php

use Illuminate\Support\Facades\Route;
use App\Models\Buku;

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

Route::get('/userdashboard', function(){
    return view('user/userDashboard');
});

Route::get('/usercari', function(){
    return view('user/userCari',[ "buku" => Buku::all()]);
});

Route::get('/login', function(){
    return view('login');
});
