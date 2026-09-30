<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        helper('url');

        $customerModel = new \App\Models\CustomerModel();
        $customers = $customerModel->findAll();

        return view('customers/index', [
            'title' => 'Customer Accounts',
            'current' => 'customers',
            'customers' => $customers,
        ]);
    }
}
