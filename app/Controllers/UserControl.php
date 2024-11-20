<?php



namespace AppControllers;

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