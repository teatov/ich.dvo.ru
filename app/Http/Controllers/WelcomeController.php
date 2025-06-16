<?php

namespace App\Http\Controllers;

use App\Models\NewsArticle;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('welcome', [
            'newsArticles' => NewsArticle::orderByDesc('created_at')->take(3)->get(),
        ]);
    }
}
