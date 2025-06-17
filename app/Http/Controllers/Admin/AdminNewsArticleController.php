<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsArticleRequest;
use App\Models\NewsArticle;
use Illuminate\Support\Facades\Redirect;

class AdminNewsArticleController extends Controller
{
    public function index()
    {
        return view('admin.news-articles', [
            'newsArticles' => NewsArticle::orderByDesc('created_at')->get(),
        ]);
    }

    public function create()
    {
        return view('admin.news-article', [
            'newsArticle' => new NewsArticle,
        ]);
    }

    public function store(NewsArticleRequest $request)
    {
        $newsArticle = new NewsArticle;
        $newsArticle->fill($request->validated());
        $newsArticle->setSlug();
        $newsArticle->save();

        return Redirect::route('news-article.show', ['slug' => $newsArticle->slug])->with('status', 'saved');
    }

    public function edit(NewsArticle $newsArticle)
    {
        return view('admin.news-article', [
            'newsArticle' => $newsArticle,
        ]);
    }

    public function update(NewsArticleRequest $request, NewsArticle $newsArticle)
    {
        $newsArticle->fill($request->validated());
        $newsArticle->setSlug();
        $newsArticle->save();

        return Redirect::route('news-article.show', ['slug' => $newsArticle->slug])->with('status', 'saved');
    }

    public function destroy(NewsArticle $newsArticle)
    {
        $newsArticle->delete();

        return Redirect::route('admin.news-article.index')->with('status', 'deleted');
    }
}
