<?php

use App\Http\Controllers\EssaController;
use App\Http\Controllers\MohamedController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [App\Http\Controllers\ProductController::class, 'index'])->name('home');
Route::resource('products',ProductController::class);

Route::get('mohamed/index', [MohamedController::class, 'index']);
Route::get('mohamed/show', [MohamedController::class, 'show']);
Route::get('mohamed/edit', [MohamedController::class, 'edit']);
Route::get('mohamed/create', [MohamedController::class, 'create']);

Route::get('essa/index', [EssaController::class, "index"]);
Route::get('essa/show', [EssaController::class, "show"]);
Route::get('essa/edit', [EssaController::class, "edit"]);
Route::get('essa/create', [EssaController::class, "create"]);

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::get('/greeting', function () {
    $message = 'Hello World';
    return view('greeting.index', ['message' => $message]);
});

Route::view('/hello1', 'greeting.hello1');
Route::view('/hello2', 'greeting.hello2', ['name' => 'Taylor']);

Route::get('/user', function () {
    $name = 'Abdou';
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

Auth::routes();
