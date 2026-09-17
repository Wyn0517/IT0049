<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        helper('url');

        $users = [
            [
                'username' => 'admin.rose',
                'full_name' => 'Rose Nguyen',
                'role' => 'Administrator',
            ],
            [
                'username' => 'cashier.dylan',
                'full_name' => 'Dylan Foster',
                'role' => 'Cashier',
            ],
            [
                'username' => 'manager.juan',
                'full_name' => 'Juan Rivera',
                'role' => 'Manager',
            ],
            [
                'username' => 'ops.kim',
                'full_name' => 'Kim Parker',
                'role' => 'Operations',
            ],
            [
                'username' => 'support.zoe',
                'full_name' => 'Zoe Martin',
                'role' => 'Support',
            ],
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'current' => 'users',
            'users' => $users,
        ]);
    }
}
