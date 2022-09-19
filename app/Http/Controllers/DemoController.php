<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DemoController extends Controller
{
    public function index(): View
    {
        return view('home');
    }

    public function name($name)
    {
        return view('name', compact['name']);
    }
}
