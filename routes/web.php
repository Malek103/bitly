<?php

use App\Models\ShortLink;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortLinkController;

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

Auth::routes();
Route::get('/home', [ShortLinkController::class, 'index'])->name('home');
Route::resource('link', ShortLinkController::class, [
    'as' => 'admin'
]);
Route::get('/{id}',[ShortLinkController::class,'redirect'])->name('redirect');
