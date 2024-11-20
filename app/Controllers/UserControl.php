<?php

namespace App\Controllers;
use App\Models\usermodel;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function about()
    {
        return view('about');
    }
}