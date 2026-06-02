<?php

namespace App\Http\Controllers;

use App\Repositories\NewsArticleRepository;
use Illuminate\Contracts\View\View;

class NewsArticleDisplayController extends Controller
{
    public function show(string $slug, NewsArticleRepository $repository): View
    {
        $item = $repository->forSlug($slug);

        if (! $item) {
            abort(404);
        }

        return view('site.newsArticle', ['item' => $item]);
    }

    public function index(NewsArticleRepository $repository): View
    {
        return view('site.news', ['items' => $repository->all()]);
    }
}
