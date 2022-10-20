<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function merchant(Request $request)
    {
        return view('pages.marchant');
    }
}
