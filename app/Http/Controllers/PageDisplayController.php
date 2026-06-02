<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use App\Repositories\PageRepository;
use Illuminate\Contracts\View\View;

class PageDisplayController extends Controller
{
    public function show(string $slug, PageRepository $repository): View
    {
        $page = $repository->forSlug($slug);

        if (! $page) {
            abort(404);
        }

        return view('site.page', ['item' => $page]);
    }

    public function home(): View
    {
        if (Homepage::get()->isNotEmpty()) {
            /** @var Homepage $homePage */
            $homePage = Homepage::published()->get()->first();

            if ($homePage) {
                return view('site.homepage', ['item' => $homePage]);
            }
        }

        abort(404);
    }
}
