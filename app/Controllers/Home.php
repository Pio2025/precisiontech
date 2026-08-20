<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/home');
    }

    public function about(): string
    {
        return view('pages/about');
    }

    public function services(): string
    {
        return view('pages/services');
    }

    public function solutions(): string
    {
        return view('pages/solutions');
    }
}
