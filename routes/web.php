<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\NamaController;
use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

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
    return view('home');
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
   

Route::resource('posts', 'App\Http\Controllers\PostController');


Auth::routes([
   ]);
   

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/about', [NamaController::class, 'about'])->name('about');
Route::get('/education', [NamaController::class, 'education'])->name('education');
Route::get('/projects', [NamaController::class, 'projects'])->name('projects');

Route::get('/send-email',function(){
    $data = [
    'name' => 'Penyubulus',
    'body' => 'Testing Kirim Email'
    ];
    
    Mail::to('pratama.hafizhfavian@gmail.com')->send(new SendEmail($data));
    
    dd("Email Berhasil dikirim.");
   });

Route::get('/send-email', [SendEmailController::class, 'index'])->name('kirim-email');
Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');
