<?php

namespace App\Controllers;

class FormController extends BaseController
{
    public function index()
    {
        return view('Form');
    }

    public function output()
    {
        return view('FormOutput');
    }
    
}
