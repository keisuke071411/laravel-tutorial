<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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
    logger('welcome route.');
    return view('welcome');
});

Route::get('/admin/movies', [MovieController::class, 'index']) -> name('movies.index');

Route::group(['prefix' => '/admin', 'as' => 'admin.'], function () {
    Route::delete('/movies/{id}', [MovieController::class, 'delete']) -> name('movies.delete');
});

