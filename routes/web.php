<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\AdminController;

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

Route::post('/itemsupload', [App\Http\Controllers\AdminController::class, 'uploaditems']);
Route::post('/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit']);
Route::get('delete/{id}',[App\Http\Controllers\AdminController::class, 'delete']);


Route::get('/sscradmin', [App\Http\Controllers\AdminController::class, 'adminconsole']);
Route::get('/additems', [App\Http\Controllers\AdminController::class, 'additems']);
Route::get('/viewitems', [App\Http\Controllers\AdminController::class, 'viewitems']);
Route::get('/edititems/{id}', [App\Http\Controllers\AdminController::class, 'editview']);
Route::get('deleteitems',[App\Http\Controllers\AdminController::class, 'deleteitems']);
Route::get('/viewusers',[App\Http\Controllers\AdminController::class, 'viewusers']);
Route::get('/vieworder',[App\Http\Controllers\AdminController::class, 'vieworders']);
Route::get('/vieworderitems/{id}',[App\Http\Controllers\AdminController::class, 'orderitems']);


Route::post('/addtocart/{id}', [App\Http\Controllers\ViewsController::class, 'addtocart']);
Route::get('/remove/{id}', [App\Http\Controllers\ViewsController::class, 'remove']);


Route::get('/tuksscr', [App\Http\Controllers\ViewsController::class, 'index']);
Route::get('/homepage', [App\Http\Controllers\ViewsController::class, 'homepage']);
Route::get('/search', [App\Http\Controllers\ViewsController::class, 'search']);
Route::get('/drinks', [App\Http\Controllers\ViewsController::class, 'drinks']);
Route::get('/mycart/{id}', [App\Http\Controllers\ViewsController::class, 'mycart']);
Route::post('checkout', [App\Http\Controllers\Viewscontroller::class, 'placeorder']); 





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




///////////////////////////////////////////////////////////////

Route::get('/invoice', [App\Http\Controllers\ViewsController::class, 'showinvoice']);
