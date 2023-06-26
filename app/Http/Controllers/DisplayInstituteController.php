<?php

namespace App\Http\Controllers;

use App\Models\Institute;
use Illuminate\View\View;
use Illuminate\Http\Request;

class DisplayInstituteController extends Controller
{
    public function show($slug): View
    {
        // returns institute according to slug on the front-end
        $institute = Institute::where('slug', $slug)->firstOrFail();
        return view('institutes.show', compact('institute'));
    }
}
