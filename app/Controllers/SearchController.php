<?php

namespace App\Controllers;

class SearchController extends BaseController
{
    public function index()
    {
        return view('SearchBar');
    }

    public function output()
    {
        return view('SearchOutput');
    }
    
}
