<?php

use Illuminate\Support\Facades\Redirect;
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

Route::get('/about', function () {
    return 'ngggeennnngggg';
});

Route::get('/contact', function () {
    return view('contact', ['name' => 'tono', 'phone' => '918571982']);
});

Route::view('/contact', 'contact', ['name' => 'tono', 'phone' => '918571982']);

Route::redirect('/contact', '/contact=us', 301);

Route::get('/product/{id}', function($id)
{
    return view('detail',['id' => $id]);
});

Route::prefix('admin')->group(function(){
    Route::get('/profile-admin', function () {
        return 'profil admin';
    });
    
    Route::get('/about-admin', function () {
        return 'about admin';
    });
    
    Route::get('/contact-admin', function () {
        return 'contact admin';
    });
});