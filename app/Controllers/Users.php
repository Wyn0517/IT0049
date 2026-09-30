<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        helper('url');

        $userModel = new \App\Models\UserModel();
        $users = $userModel->findAll();

        return view('users/index', [
            'title' => 'User Accounts',
            'current' => 'users',
            'users' => $users,
        ]);
    }
}
