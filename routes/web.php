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
    return view('portohome');
});

// Route::get('/halo-dunia', function () {
//     return ('<h1>tes 123</h1>');
// });

// Route::get( '/halo/{nama}' , function($nama='kosong') {
//     return '<h1>Halo ' . $nama . '</h1>';
//    });

Route::get('/ppw2', function() {
    return view('ppw2', ['data' => 'Contoh saja']);
   });
   
Route::get('/about', function() {
    return view('about');
   });

Route::get('/education', function() {
    return view('education');
   });

Route::get('/projects', function() {
    return view('projects');
   });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts', 'App\Http\Controllers\PostController');

