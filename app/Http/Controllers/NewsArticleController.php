<?php

namespace App\Http\Controllers;

use App\Models\NewsArticle;

class NewsArticleController extends Controller
{
    public function index()
    {
        return view('news', [
            'newsArticles' => NewsArticle::all(),
        ]);
    }

    public function show(string $slug)
    {
        return view('news-article', [
            'newsArticle' => NewsArticle::where('slug', $slug)->firstOrFail(),
            'otherNewsArticles' => NewsArticle::where('slug', '!=', $slug)->orderByDesc('created_at')->take(3)->get(),
        ]);
    }
}
