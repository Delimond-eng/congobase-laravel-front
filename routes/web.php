<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localize']], function() {
    //Goto to home page
    Route::get('/', function () {
        return view('home', [
            "title"=>"Accueil"
        ]);
    });

    //Goto subscription page
    Route::get('/subscription', function() {
        return view("subscription", [
            "title"=> "Souscription"
        ]);
    })->name('subscription');

    //Goto gallery
    Route::get('/gallery', function () {
        return view('gallery', [
            "title"=>"Gallérie"
        ]);
    })->name('gallery');

    //Goto Contact
    Route::get('/contact', function () {
        return view('contact', [
            "title"=>"Contact"
        ]);
    })->name('contact');

    //Goto about page
    Route::get('/about', function () {
        return view('about', [
            "title"=>"A Propos"
        ]);
    })->name('about');

    //Goto Events page
    Route::get('/events', function () {
        return view('events', [
            "title"=>"Evènements"
        ]);
    })->name('events');

    //Goto Actions page
    Route::get('/actions', function () {
        return view('actions', [
            "title"=>"Actions"
        ]);
    })->name('actions');

    //Route allow to create new member
    Route::post('/subscribe', [MemberController::class, 'createMember'])->name('subscribe');

    Route::post('/set-language', [LanguageController::class, 'setLanguage'])->name('setLanguage');

    Route::post('/set-locale', function (Illuminate\Http\Request $request) {
        $locale = $request->input('locale');
        if (in_array($locale, ['en', 'fr'])) {
            session(['locale' => $locale]);
        }
        return response()->json(['status' => 'success']);
    });
});