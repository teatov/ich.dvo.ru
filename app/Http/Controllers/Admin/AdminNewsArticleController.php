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
    }

    public function store(NewsArticleRequest $request)
    {
        //
    }

    public function edit(int $id)
    {
        return view('admin.news-article-edit', [
            'newsArticle' => NewsArticle::findOrFail($id)
        ]);
    }

    public function update(NewsArticleRequest $request, int $id)
    {
        $newsArticle = NewsArticle::findOrFail($id);
        $newsArticle->fill($request->validated());
        $newsArticle->save();

        return Redirect::route('admin.news-article-edit', ['id'=>$id])->with('status', 'saved');
    }

    public function destroy(NewsArticle $newsArticle)
    {
        //
    }
}
