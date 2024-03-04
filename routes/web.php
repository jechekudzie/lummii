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
})->name('home');

Route::get('/renewable-energy', function () {
    return view('solar');
})->name('renewable-energy');
Route::get('/eniscope', function () {
    return view('eniscope');
})->name('eniscope');
Route::get('/case_studies', function () {
    return view('case_studies');
})->name('case_studies');

Route::get('/case_studies/monitoring', function () {
    return view('cases.monitoring');
})->name('monitoring');

Route::get('/case_studies/recipe', function () {
    return view('cases.recipe');
})->name('recipe');

Route::get('/case_studies/drivehuge', function () {
    return view('cases.driveshuge');
})->name('drivehuge');


Route::get('/case_studies/7eleven', function () {
    return view('cases.7eleven');
});

Route::get('/case_studies/circuit', function () {
    return view('cases.circuit');
})->name('circuit');

Route::get('/solutions', function () {
    return view('solutions');
})->name('solutions');
Route::get('/technologies', function () {
    return view('technologies');
})->name('technologies');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//contact form email
Route::post('/send_email', 'SiteController@send_email');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
