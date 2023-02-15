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
    $hello_world = 'Hello World';
    return view('home', compact('hello_world'));
});

Route::get('about-us', function () {
    $data = [
        'name' => 'Junior Development',
        'language' => 'HTML, CSS, JS, PHP',

    ];
    $title = 'Chi siamo';
    return view('about_us', compact('data', 'title'));
})->name('about_us');
