<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FormDataController;
use Illuminate\Http\Request;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/{form_id}', [FormController::class, 'index'])->name('form');
Route::get('/thanks', [FormDataController::class, 'index'])->name('thanks');

Route::post('/form-store', [HomeController::class, 'storeForm'])->name('form.store');
Route::post('/send/{api_token}/{form}', [HomeController::class, 'storeForm'])->name('form.data-store');
Route::post('/send/{form_id}', [FormDataController::class, 'store']);
Route::delete('/delete/{id}', [FormController::class, 'destroy'])->name('form.data-delete');
