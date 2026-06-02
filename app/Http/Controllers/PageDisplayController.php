<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use App\Models\History;
use App\Repositories\PageRepository;
use Illuminate\Contracts\View\View;
use App\Repositories\NewsArticleRepository;

class PageDisplayController extends Controller
{
    public function show(string $slug, PageRepository $repository): View
    {
        $item = $repository->forSlug($slug);

        if (! $item) {
            abort(404);
        }

        return view('site.page', ['item' => $item]);
    }

    public function home(NewsArticleRepository $newsRepository): View
    {
        if (Homepage::get()->isNotEmpty()) {
            /** @var Homepage $item */
            $item = Homepage::published()->get()->first();

            if ($item) {
                return view('site.homepage', ['item' => $item, 'newsArticles' => $newsRepository->last3()]);
            }
        }

        abort(404);
    }

    public function history(): View
    {
        if (History::get()->isNotEmpty()) {
            /** @var History $item */
            $item = History::published()->get()->first();

            if ($item) {
                return view('site.history', ['item' => $item]);
            }
        }

        abort(404);
    }
}
