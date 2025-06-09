<?php

namespace App\Http\Controllers;

use App\Models\TextLine;
use Illuminate\Http\Request;

class EditTextController extends Controller
{
    public function __invoke(Request $request)
    {
        $text = $request->input('text');
        $key = $request->input('key');

        $textLine = TextLine::firstOrNew(['id' => $key]);
        $textLine->text = $text;
        $textLine->save();

        return response()->json([
            'newText' => $text,
        ]);
    }
}
