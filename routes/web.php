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
    $data = [
        'chi_siamo' => route('about_us'), // non andava così "route('about_us')"  perchè le virgolette la rendevano una STRINGA
        'contatti' => route('contacts'),
        'obbiettivo' => route('obbiettivo')
    ];
    return view('home', compact('hello_world', 'data'));
})->name('home');

// chi siamo

Route::get('about-us', function () {
    $data = [
        'name' => 'Junior Development',
        'language' => 'HTML, CSS, JS, PHP',

    ];
    $title = 'Chi siamo';
    return view('about_us', compact('data', 'title'));
})->name('about_us');

// contatti

Route::get('contatti', function () {
    $data = [
        'email' => 'elessar@mail.com',
        'telefono' => '01100001 01110010 01100001 01100111 01101111 01110010 01101110 00001010',
        'via' => 'Minas Tirith, Gondor',
        'cap' => '404040'

    ];
    $title = 'Contatti';
    return view('contacts', compact('data', 'title'));
})->name('contacts');

// obbiettivi

Route::get('obbiettivi', function (){
    $obbiettivo = "Il Signore degli Anelli narra della missione di nove Compagni, la Compagnia dell'Anello, partiti per distruggere il più potente Anello del Potere, un'arma che renderebbe invincibile il suo malvagio creatore Sauron se tornasse nelle sue mani, dandogli il potere di dominare tutta la Terra di Mezzo.";
    $title = 'Obbiettivo';
    return view('obbiettivo', compact('obbiettivo', 'title'));

})->name('obbiettivo');