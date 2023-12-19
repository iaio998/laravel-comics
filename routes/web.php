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
    $product = config('my-comics.comics');
    $hyper = config('my-menu.menu');
    $first = config('my-footer.first');
    $second = config('my-footer.second');
    $third = config('my-footer.third');
    $fourth = config('my-footer.fourth');
    return view('home', compact('product', 'hyper', 'first', 'second', 'third', 'fourth'));
});
