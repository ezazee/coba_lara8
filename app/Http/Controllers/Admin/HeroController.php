<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function Hero(){
        return view('pages.admin.landing_pages.hero.hero');
    }

    public function Edit(){
        return view('pages.admin.landing_pages.hero.edit');
    }
}
