<?php

namespace App\Http\Controllers;

class Homecontroller
{
    public function index()
    {
        return view('home');
    }

    public function post()
    {
        return view('single_news_feed');
    }
}
