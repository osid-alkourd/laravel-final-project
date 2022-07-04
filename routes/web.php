<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\conditionController;
use App\Http\Controllers\newLoginController;
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


Route::get('/login' , [loginController::class , 'login'])->name('loginRoute');
Route::post('/submit' , [loginController::class , 'submit'])->name('submitRoute');

Route::get('/middle' , [conditionController::class ,   'login']);


Route::get('/home' , [newLoginController::class , 'toHome'])->name('homePage');

Route::post('/post' , [newLoginController::Class , 'store'])->name('post.add');

Route::get('/posts' , [newLoginController::class , 'index'])->name('All.posts');

Route::get('/posts/{id}' , [newLoginController::class , 'destroy'])->name('Delete.post');

Route::get('/posts/edit/{id}' ,[newLoginController::class , 'edit'])->name('edit.post');

Route::post('/posts/update/{id}' ,[newLoginController::class , 'update'])->name('update.post');

