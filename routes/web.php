<?php

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

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
    return view('front.index');
});

Route::get('/contact', function () {
    return view('front.contact');
});

// Route::post('/contact', function (Request $request) {
//   Mail::to('matsalez@gmail.com')->send(new ContactMail($request));
//   return redirect('/');
// });

Route::post('/', 'EmailController@contact')->name('contact');
