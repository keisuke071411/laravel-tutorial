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


Route::group(['prefix' => '/admin', 'as' => 'admin.'], function () {
    Route::get('/movies', [MovieController::class, 'index']) -> name('movies.index');
    Route::get('/movies/create', [MovieController::class, 'create']) -> name('movies.create');
    Route::post('/movies/store', [MovieController::class, 'store'])->name('movies.store');
    Route::get('/movies/edit/{id}', [MovieController::class, 'edit']) -> name('movies.edit');
    Route::put('/movies/update/{id}', [MovieController::class, 'update']) -> name('movies.update');
    Route::delete('/movies/delete/{id}', [MovieController::class, 'delete']) -> name('movies.delete');
});

