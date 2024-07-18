<?php
namespace App\Services;

use Wamania\Snowball\StemmerFactory;

class NLPService
{
    protected $stemmer;

    public function __construct()
    {
        $this->stemmer = StemmerFactory::create('en');
    }

    public function extractKeywords($text)
    {
        $words = preg_split('/\s+/', $text);
        $keywords = [];

        foreach ($words as $word) {
            $stem = $this->stemmer->stem($word);
            if (!in_array($stem, $this->getStopWords())) {
                $keywords[] = $stem;
            }
        }

        return array_unique($keywords);
    }

    protected function getStopWords()
    {
        return [
            // قائمة كلمات التوقف (يمكنك توسيعها حسب الحاجة)
            'the', 'is', 'at', 'which', 'on', 'and', 'a', 'an', 'of', 'for', 'to', 'in', 'with', 'by', 'from'
        ];
    }
}
