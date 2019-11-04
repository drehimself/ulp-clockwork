<?php

use App\User;
use App\Mail\OrderShipped;
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
    clock()->startEvent('get-users', "Get all users in database");
    $users = User::all();
    clock()->endEvent('get-users');
});

Route::get('/posts', 'PostController@index')->name('post.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
