<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index(): string
    {
        helper('url');

        $customerModel = new CustomerModel();
        $customers = $customerModel->findAll();

        return view('customers/index', [
            'title' => 'Customer Accounts',
            'current' => 'customers',
            'customers' => $customers,
        ]);
    }

    public function new(): string
    {
        helper(['form', 'url']);
        return view('customers/new', [
            'title' => 'New Customer',
            'current' => 'customers',
        ]);
    }

    public function create()
    {
        helper(['form', 'url']);

        $rules = [
            'full_name' => [
                'rules'  => 'required|min_length[2]|alpha_space',
                'errors' => [
                    'required'    => 'Full name is required.',
                    'min_length'  => 'Full name must be at least 2 characters.',
                    'alpha_space' => 'Full name can only contain letters and spaces.',
                ],
            ],
            'email' => [
                'rules'  => 'required|valid_email',
                'errors' => [
                    'required'    => 'Email is required.',
                    'valid_email' => 'Please enter a valid email address.',
                ],
            ],
        ];

        if (!$this->validate($rules)) {
            return view('customers/new', [
                'title' => 'New Customer',
                'current' => 'customers',
                'validation' => $this->validator
            ]);
        }

        $customerModel = new CustomerModel();
        $customerModel->save([
            'full_name'  => $this->request->getPost('full_name'),
            'email'      => $this->request->getPost('email'),
            'phone'      => $this->request->getPost('phone'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/customers')->with('success', 'Customer created successfully.');
    }

    public function edit($id): string
    {
        helper(['form', 'url']);

        $customerModel = new CustomerModel();
        $customer = $customerModel->find($id);

        return view('customers/edit', [
            'title' => 'Edit Customer',
            'current' => 'customers',
            'customer' => $customer,
        ]);
    }

    public function update($id)
    {
        helper(['form', 'url']);

        $rules = [
            'full_name' => [
                'rules'  => 'required|min_length[2]|alpha_space',
                'errors' => [
                    'required'    => 'Full name is required.',
                    'min_length'  => 'Full name must be at least 2 characters.',
                    'alpha_space' => 'Full name can only contain letters and spaces.',
                ],
            ],
            'email' => [
                'rules'  => 'required|valid_email',
                'errors' => [
                    'required'    => 'Email is required.',
                    'valid_email' => 'Please enter a valid email address.',
                ],
            ],
        ];

        if (!$this->validate($rules)) {
            $customerModel = new CustomerModel();
            return view('customers/edit', [
                'title' => 'Edit Customer',
                'current' => 'customers',
                'customer' => $customerModel->find($id),
                'validation' => $this->validator
            ]);
        }

        $customerModel = new CustomerModel();
        $customerModel->update($id, [
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
            'phone'     => $this->request->getPost('phone'),
        ]);

        return redirect()->to('/customers')->with('success', 'Customer updated successfully.');
    }
}
