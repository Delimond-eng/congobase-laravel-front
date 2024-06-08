<?php

namespace App\Http\Controllers;

use App\Services\TranslationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class LanguageController extends Controller
{
    public function setLanguage(Request $request)
    {
        $lang = $request->input('lang');
        Session::put('locale', $lang);
        LaravelLocalization::getLocalizedURL($lang);
        return redirect()->back();
    }
}