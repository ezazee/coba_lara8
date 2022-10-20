<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(Request $request)
    {
        return view('pages.blog');
    }
}
