<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryLayananController extends Controller
{
    public function Category() {
        return view('pages.admin.landing_pages.category.category');
    }

    public function Edit() {
        return view('pages.admin.landing_pages.category.edit');
    }
}
