<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function About() {
        return view('pages.admin.landing_pages.about.about');
    }

    public function Edit(){
        return view('pages.admin.landing_pages.about.edit');
    }
}
