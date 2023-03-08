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

Route::get('/greeting', function () {
    $message = 'Hello World';
    return view('greeting.index', ['message' => $message]);
});

Route::view('/hello1', 'greeting.hello1');
Route::view('/hello2', 'greeting.hello2', ['name' => 'Taylor']);

Route::get('/user', function () {
    $name = 'ju';
    return view('users.index', ['user' => $name]);
});

Route::get('/user/{id}', function (string $id) {
    $name = 'User ' . $id;
    return view('users.index', ['user' => $name]);
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    $id = 'votre identifiant est ' .$postId;
    $comntr = 'l\'identifiant est ' . $commentId;
    return view('posts.index', ['idr' => $id,'comntr' => $comntr]);
});

Route::get('/user/{name?}', function ($name = 'John') {

    return view('user.userparams', [$name]);
});
