<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Services\NLPService;

class SearchController extends Controller
{
    protected $nlpService;
    
    public function __construct(NLPService $nlpService)
    {
        $this->nlpService = $nlpService;
    }

    public function store(Request $request)
    {
        $query = $request->input('search');
        $keywords = $this->nlpService->extractKeywords($query);

        $articles = Article::where(function ($q) use ($keywords) {
            foreach ($keywords as $keyword) {
                $q->orWhere('content', 'LIKE', "%$keyword%");
            }
        })->get();

        return view('interface.results', ['articles' => $articles]);
    }
    public function show()
    {
        return view('interface.search');
    }
}
