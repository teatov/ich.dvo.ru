<?php

namespace App\Http\Controllers;

use App\Repositories\NewsArticleRepository;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class NewsArticleDisplayController extends Controller
{
    public function show(string $slug, NewsArticleRepository $repository): View
    {
        $page = $repository->forSlug($slug);

        if (!$page) {
            abort(404);
        }

        return view('site.newsArticle', ['item' => $page]);
    }
}
