<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function getArticlesByCategory(Request $request)
    {
        $article = new Article;
        $categoryId = intval($request->category);
        $articles = $article::where('category_id', $categoryId)
            ->orderBy('id', 'desc')
            ->get();
        $articlesArray = $articles->toArray();
        if (count($articlesArray)) {
            return json_encode($articlesArray);
        };
        return 'end';
    }
}
