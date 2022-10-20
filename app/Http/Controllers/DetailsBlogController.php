<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailsBlogController extends Controller
{
    public function details(Request $request, $slug)
    {
        return view('pages.details-blog');
    }
}
