<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoBantuanController extends Controller
{
    public function Bantuan() {
        return view('pages.admin.landing_pages.video_bantuan.videobantuan');
    }

    public function Edit() {
        return view('pages.admin.landing_pages.video_bantuan.edit');
    }

    public function Create() {
        return view('pages.admin.landing_pages.video_bantuan.create');
    }
}
