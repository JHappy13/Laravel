<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::controller(UserController::class)->group(function(){
    Route::get('/', 'index');
});

Route::controller(PostController::class)->group(function(){
    Route::get('posts', 'posts');
});


// Route::get('/', function () {
//     return view('home',[
//         'clients' => User::whereIn('id', [4,9])->get()
//     ]);
// });
