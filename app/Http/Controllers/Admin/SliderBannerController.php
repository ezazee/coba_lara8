<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderBannerController extends Controller
{
    public function Slider() {
        return view('pages.admin.landing_pages.banner.slider');
    }

    public function Edit() {
        return view('pages.admin.landing_pages.banner.edit');
    }

    public function Create() {
        return view('pages.admin.landing_pages.banner.create');
    }
}
