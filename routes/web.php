<?php

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
*/

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php

Route::get('/about', function () {
    return view('about');  // Ensure the 'about.blade.php' file exists in 'resources/views'
})->name('about');

// routes/web.php

// Route to show the contact form
Route::get('/contact', function () {
    return view('contact'); // Make sure 'contact.blade.php' exists in the 'resources/views' folder
})->name('contact');

// Route to handle the contact form submission
Route::post('/send-message', [ContactController::class, 'sendMessage'])->name('send-message');


Route::get('profil','ProfilController@index');
Route::get('profil/create', 'ProfilController@create');
Route::post('profil', 'ProfilController@store');
Route::get('profil/edit/{id}', 'ProfilController@edit');
Route::patch('profil/{id}', 'ProfilController@update');
Route::delete('profil/{id}', 'ProfilController@delete');


Route::get('portofolio','PortofolioController@index');
Route::get('portofolio/create', 'PortofolioController@create');
Route::post('portofolio', 'PortofolioController@store');
Route::get('portofolio/edit/{id}', 'PortofolioController@edit');
Route::patch('portofolio/{id}', 'PortofolioController@update');
Route::delete('portofolio/{id}', 'PortofolioController@delete');

Route::get('services','ServicesController@index');