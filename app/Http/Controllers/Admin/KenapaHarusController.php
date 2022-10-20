<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KenapaHarusController extends Controller
{
    public function Kenapa() {
        return view('pages.admin.landing_pages.kenapa.kenapa');
    }

    public function Edit() {
        return view('pages.admin.landing_pages.kenapa.edit');
    }
}
