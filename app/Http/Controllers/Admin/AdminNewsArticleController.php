<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\NewsArticleRequest;
use App\Models\NewsArticle;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class AdminNewsArticleController extends Controller
{
    public function index()
    {
        return view('admin.news-articles', [
            'newsArticles' => NewsArticle::all()
        ]);
    }

    public function create()
    {
        return view('admin.news-article', [
            'newsArticle' => new NewsArticle()
        ]);
    }

    public function store(NewsArticleRequest $request)
    {
        $newsArticle = new NewsArticle();
        $newsArticle->fill($request->validated());
        $newsArticle->save();

        return Redirect::route('admin.news-article.edit', ['news_article'=>$newsArticle])->with('status', 'saved');
    }

    public function edit(NewsArticle $newsArticle)
    {
        return view('admin.news-article', [
            'newsArticle' => $newsArticle
        ]);
    }

    public function update(NewsArticleRequest $request, NewsArticle $newsArticle)
    {
        $newsArticle->fill($request->validated());
        $newsArticle->save();

        return Redirect::route('admin.news-article.edit', ['news_article'=>$newsArticle])->with('status', 'saved');
    }

    public function destroy(NewsArticle $newsArticle)
    {
        $newsArticle->delete();

        return Redirect::route('admin.news-article.index')->with('status', 'deleted');
    }
}
