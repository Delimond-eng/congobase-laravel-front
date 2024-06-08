<?php
namespace App\Services;
use Google\Cloud\Translate\V2\TranslateClient;
use Illuminate\Support\Facades\Cache;

class GoogleTranslateService
{
    protected $translate;
    protected $cachePrefix = 'translation_';
    protected $cacheDuration = 60 * 24 * 30;

    public function __construct()
    {
        $this->translate = new TranslateClient([
            'key' => env('GOOGLE_TRANSLATE_API_KEY')
        ]);
    }

    public function translate($text, $targetLanguage)
    {
        $cacheKey = $this->cachePrefix . md5($text . $targetLanguage);
        // Check if translation is cached
        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }
        // Translate the text
        $translation = $this->translate->translate($text, [
            'target' => $targetLanguage,
        ]);

        // Cache the translation
        Cache::put($cacheKey, $translation['text'], $this->cacheDuration);

        return htmlspecialchars_decode($translation['text']);
    }
}