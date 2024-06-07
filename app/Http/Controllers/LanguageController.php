<?php

namespace App\Http\Controllers;

use App\Services\TranslationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
     protected $translationService;

    public function __construct(TranslationService $translationService)
    {
        $this->translationService = $translationService;
    }

    public function setLanguage(Request $request)
    {
        $lang = $request->input('lang');
        Session::put('locale', $lang);

        return redirect()->back();
    }

    public function translate(Request $request)
    {
        $text = $request->input('text');
        $lang = Session::get('locale', 'en');

        $translatedText = $this->translationService->translate($text, $lang);

        return response()->json(['translatedText' => $translatedText]);
    }
}