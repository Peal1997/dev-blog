<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\Controllers\userController;
use App\Http\Controllers\staffController;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('/');
Route::get('/',[postController::class, 'post']) ->name('post');
Route::get('staff/add',[staffController::class, 'add']) ->name('staff.add');
Route::post('staff/add/store',[staffController::class, 'store']) ->name('staff.store');
Route::get('members',[staffController::class, 'index']) ->name('members.index');
Route::get('contact',[staffController::class, 'contact']) ->name('members.contact');
Route::get('contact',[staffController::class, 'contact']) ->name('members.contact');
Route::get('contact',[staffController::class, 'contact']) ->name('members.contact');
Route::get('staff/{id}',[staffController::class, 'show']) ->name('staff.show');
Route::get('register',[userController::class, 'register']) ->name('register');
Route::post('register',[userController::class, 'register_action']) ->name('register.action');
Route::get('login',[userController::class, 'login']) ->name('login');
Route::post('login',[userController::class, 'login_action']) ->name('login.action');
Route::get('dashboard',[userController::class, 'index']) ->name('dashboard');
Route::get('delete/{id}',[userController::class, 'destroy']) ->name('staff.destroy');
Route::get('create',[postController::class, 'create']) ->name('create');
Route::post('create',[postController::class, 'create_post']) ->name('create.post');
Route::get('update/{id}',[userController::class, 'update']) ->name('user.update');
Route::post('edit',[userController::class, 'edit']) ->name('user.edit');
Route::get('post_dashboard',[userController::class, 'post_dashboard']) ->name('post.dashboard');
Route::get('post_delete/{id}',[postController::class, 'destroy']) ->name('post.destroy');
Route::get('logout',[userController::class, 'logout']) ->name('logout');

//fro showing layout
Route::get('/layout',function(){
    return view('layouts.layout');
});