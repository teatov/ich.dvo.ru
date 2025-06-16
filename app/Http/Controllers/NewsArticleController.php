<?php

namespace App\Http\Controllers;

use App\Models\NewsArticle;

class NewsArticleController extends Controller
{
    public function show(int $id)
    {
        return view('news-article', [
            'newsArticle' => NewsArticle::findOrFail($id),
            'otherNewsArticles' => NewsArticle::orderByDesc('created_at')->take(3)->get(),
        ]);
    }
}
