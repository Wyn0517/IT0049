<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        helper('url');

        return view('pages/landing', [
            'title' => 'POS Lite',
            'current' => 'home',
        ]);
    }

    public function about(): string
    {
        helper('url');

        return view('pages/about', [
            'title' => 'About',
            'current' => 'about',
        ]);
    }
}
