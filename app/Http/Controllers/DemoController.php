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
        $students = [
            "Hussein",
            "Meyer",
            "Départeur",
            "Louise",
        ];
        return view('home', compact('students'));
    }
}
// test controller