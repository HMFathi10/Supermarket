<?php

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

Route::get('/home', function () {
    return view('sections/home');
});


Route::get('/storge', function () {
    return view('sections/storge');
});

Route::get('/makeorder', function () {
    return view('sections/makeorder');
});

Route::get('/inventory', function () {
    return view('sections/inventory');
});

Route::get('/expenses', function () {
    return view('sections/expenses');
});

Route::get('/orders', function () {
    return view('sections/orders');
});

Route::get('/storge/addnewproduct', function () {
    return view('sections/addnewproduct');
});

Route::get('/orders/openorderdetails', function () {
    return view('sections/openorderdetails');
});
