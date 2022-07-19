<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// use
// namespace

// Route::get('url', 'Action');
// Route::post('url', 'Action');
// Route::put('url', 'Action');
// Route::patch('url', 'Action');
// Route::delete('url', 'Action');

// =>
// $
// .
// ::
// ->

// Route::get('/', function() {
//     return 'Home Page';
// });

// Route::get('about', function() {
//     return 'About Page';
// });

// Route::get('contact', function() {
//     return 'Contact Page';
// });

// Route::get('services', function() {
//     return 'Services Page';
// });

// Route::get('team', function() {
//     return 'Team Page';
// });

// Route::get('user/{name}/comment/{age}/info/{user}', function($name, $age, $user) {
//     return 'Welcome ' . $name . ', Age = ' . $age . ', Username = ' . $user;
// })->whereAlpha('name')->whereNumber('age')->whereAlphaNumeric('user')->name('userinfo');


// Route::get('news', function() {
//     return 'News';
// });

// Route::get('news/{id?}', function($id = null) {
//     if($id) {
//         return 'news id = ' . $id;
//     }
//     return 'News';
// });

// Route::get('/', function() {
//     // return url('contact-us');
//     // return route('contactpage');
//     $name = 'Nada';
//     $age = 19;
//     $user = 'nadakhader';

//     // return url('user/'.$name.'/comment/'.$age.'/info/'.$user);
//     return route('userinfo',[$name, $age, $user]);
// });

// Route::get('contact-kjhfdskjhfdsjh', function() {
//     return 'Contact Us';
// })->name('contactpage');


Route::get('/', [HomeController::class, 'index'])->name('homepage');
