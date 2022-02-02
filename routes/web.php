<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;

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



Route::get('/', [DocumentController::class, 'index']);

Route::get('/index',function()
{
return view('home2');
});

Route::get('document/search',[DocumentController::class,'index'])->name('document.search');

Route::get('document/show',[DocumentController::class,'show'])->name('document.show');

Route::resource('document', DocumentController::class);
