<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HelloController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
青本に記載されている下記のルーティングの書き方はlaravel 7までの書き方。
Route::get('hello', 'HelloController@index');

laravel 8からは以下の方法でルーティングを書く必要がある。
① 完全修飾名でコントローラを指定する
Route::get('hello', 'App\Http\Controllers\HelloController@index');
② useでコントローラをインポートして以下のようにルーティングを書く
Route::get('hello', [HelloController::class, 'index']);
*/
Route::get('hello/{id?}/{pass?}', [HelloController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
