<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TextLine;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function texts(Request $request)
    {
        $textLines = TextLine::all();

        return view('admin.texts', [
            'textLines' => $textLines,
        ]);
    }
}
