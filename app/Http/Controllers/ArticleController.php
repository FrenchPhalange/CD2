<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index()
    {
        $articleJsonfile = file_get_contents
        (resource_path('data/articles.json'));
        
        $articles = json_decode($articleJsonfile)
        ->articles; 
        return view('articles', compact('articles'));
    }

    public function show($index)
    {
        $articleJsonfile = file_get_contents
        (resource_path('data/articles.json'));
    }
}
