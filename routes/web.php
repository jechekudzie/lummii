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
Route::get('/eniscope', function () {
    return view('eniscope');
});
Route::get('/case_studies', function () {
    return view('case_studies');
});

Route::get('/case_studies/monitoring', function () {
    return view('cases.monitoring');
});

Route::get('/case_studies/recipe', function () {
    return view('cases.recipe');
});

Route::get('/case_studies/drivehuge', function () {
    return view('cases.driveshuge');
});


Route::get('/case_studies/7eleven', function () {
    return view('cases.7eleven');
});

Route::get('/case_studies/circuit', function () {
    return view('cases.circuit');
});

Route::get('/solutions', function () {
    return view('solutions');
});
Route::get('/technologies', function () {
    return view('technologies');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

//contact form email
Route::post('/send_email', 'SiteController@send_email');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
