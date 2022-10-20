<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MitraLandingController extends Controller
{
    public function Mitra_Landing() {
        return view('pages.admin.landing_pages.mitra_landing.mitralanding');
    }

    public function Edit() {
        return view('pages.admin.landing_pages.mitra_landing.edit');
    }
}
