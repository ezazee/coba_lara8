<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TawaranController extends Controller
{
    public function Tawaran() {
        return view('pages.admin.landing_pages.tawaran.tawaran');
    }

    public function Edit() {
        return view('pages.admin.landing_pages.tawaran.edit');
    }
}
