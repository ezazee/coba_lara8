<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function Artikel() {
        return view('pages.admin.artikel.artikel');
    }

    public function Edit(){
        return view('pages.admin.artikel.edit');
    }

    public function Create(){
        return view('pages.admin.artikel.create');
    }
}
