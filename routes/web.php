<?php

use App\Http\Controllers\FormsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\Site3Controller;
use App\Http\Controllers\WebController;

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

Route::get('/', [WebController::class, 'index'])->name('web.index');

Route::get('/about', [WebController::class, 'about'])->name('web.about');

Route::get('/contact', [WebController::class, 'contact'])->name('web.contact');

Route::get('/team', [WebController::class, 'team'])->name('web.team');

Route::get('news/{id?}', [WebController::class, 'news'])->name('web.news');

Route::prefix('site2')->name('site2.')->group(function() {
    Route::get('/', [Site2Controller::class, 'index'])->name('index');

    Route::get('/about', [Site2Controller::class, 'about'])->name('about');

    Route::get('/contact', [Site2Controller::class, 'contact'])->name('contact');

    Route::get('/post', [Site2Controller::class, 'post'])->name('post');
});


Route::prefix('site3')->name('site3.')->group(function() {

    Route::get('/', [Site3Controller::class, 'index'])->name('index');
    Route::get('/experienc', [Site3Controller::class, 'experienc'])->name('experienc');
    Route::get('/education', [Site3Controller::class, 'education'])->name('education');
    Route::get('/skills', [Site3Controller::class, 'skills'])->name('skills');
    Route::get('/interests', [Site3Controller::class, 'interests'])->name('interests');
    Route::get('/awards', [Site3Controller::class, 'awards'])->name('awards');

});

Route::get('form1', [FormsController::class, 'form1'])->name('form1');
Route::post('form1', [FormsController::class, 'form1_data'])->name('form1_data');


Route::get('form2', [FormsController::class, 'form2'])->name('form2');
Route::post('form2', [FormsController::class, 'form2_data'])->name('form2_data');


Route::get('form3', [FormsController::class, 'form3'])->name('form3');
Route::post('form3', [FormsController::class, 'form3_data'])->name('form3_data');
