<?php
// app/Services/TranslationService.php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class TranslationService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.google_translate.api_key');
    }

    public function translate($text, $targetLang = 'en', $sourceLang = null)
    {
        $response = Http::post("https://translation.googleapis.com/language/translate/v2", [
            'q' => $text,
            'target' => $targetLang,
            'source' => $sourceLang,
            'key' => $this->apiKey,
        ]);

        $data = $response->json();

        return $data['data']['translations'][0]['translatedText'] ?? $text;
    }
}