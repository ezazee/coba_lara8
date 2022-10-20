<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function FAQ(){
        return view('pages.admin.faq.faq');
    }

    public function Edit(){
        return view('pages.admin.faq.edit');
    }

    public function Create(){
        return view('pages.admin.faq.create');
    }
}
