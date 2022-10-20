<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function driver(Request $request)
    {
        return view('pages.driver');
    }
}
