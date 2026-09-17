<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        helper('url');

        $customers = [
            [
                'full_name' => 'Alicia Gomez',
                'email' => 'alicia.gomez@example.com',
                'phone' => '(555) 208-1144',
            ],
            [
                'full_name' => 'Marcus Lee',
                'email' => 'marcus.lee@example.com',
                'phone' => '(555) 410-9912',
            ],
            [
                'full_name' => 'Nina Patel',
                'email' => 'nina.patel@example.com',
                'phone' => '(555) 823-6670',
            ],
            [
                'full_name' => 'Daniel Brooks',
                'email' => 'daniel.brooks@example.com',
                'phone' => '(555) 118-7423',
            ],
            [
                'full_name' => 'Sofia Reed',
                'email' => 'sofia.reed@example.com',
                'phone' => '(555) 604-3058',
            ],
        ];

        return view('customers/index', [
            'title' => 'Customer Accounts',
            'current' => 'customers',
            'customers' => $customers,
        ]);
    }
}
