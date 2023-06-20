<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\UserController;

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
    return view('home');
});

Route::get('/articles', function () {
    $articles = Article::paginate(3);
    return view('articles', ['articles' => $articles]);
});

Route::get('/admin', function () {
    return view('admin');
});

Route::post('/user/checklogin', [UserController::class, 'checklogin']);
Route::post('/user/logout', [UserController::class, 'logout']);