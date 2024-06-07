<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title"=>"Accueil"
    ]);
});

Route::get('/subscription', function() {
    return view("subscription", [
        "title"=> "Souscription"
    ]);
});

//Route::post('/set-language', [LanguageController::class, 'setTarget'])->name('setLanguage');

Route::post('/set-language', [LanguageController::class, 'setLanguage'])->name('setLanguage');
Route::post('/translate', [LanguageController::class, 'translate'])->name('translate');