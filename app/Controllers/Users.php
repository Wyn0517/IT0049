<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index(): string
    {
        helper('url');

        $userModel = new UserModel();
        $users = $userModel->findAll();

        return view('users/index', [
            'title' => 'User Accounts',
            'current' => 'users',
            'users' => $users,
        ]);
    }

    public function new(): string
    {
        helper(['form', 'url']);
        return view('users/new', [
            'title' => 'New User',
            'current' => 'users',
        ]);
    }

    public function create()
    {
        helper(['form', 'url']);

        $rules = [
            'username' => [
                'rules'  => 'required|min_length[3]|is_unique[users.username]',
                'errors' => [
                    'required'   => 'Username is required.',
                    'min_length' => 'Username must be at least 3 characters.',
                    'is_unique'  => 'This username is already taken.',
                ],
            ],
            'full_name' => [
                'rules'  => 'required|min_length[2]|alpha_space',
                'errors' => [
                    'required'    => 'Full name is required.',
                    'min_length'  => 'Full name must be at least 2 characters.',
                    'alpha_space' => 'Full name can only contain letters and spaces.',
                ],
            ],
        ];

        if (!$this->validate($rules)) {
            return view('users/new', [
                'title' => 'New User',
                'current' => 'users',
                'validation' => $this->validator
            ]);
        }

        $userModel = new UserModel();
        $userModel->save([
            'username'   => $this->request->getPost('username'),
            'full_name'  => $this->request->getPost('full_name'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/users')->with('success', 'User created successfully.');
    }

    public function edit($id): string
    {
        helper(['form', 'url']);

        $userModel = new UserModel();
        $user = $userModel->find($id);

        return view('users/edit', [
            'title' => 'Edit User',
            'current' => 'users',
            'user' => $user,
        ]);
    }

    public function update($id)
    {
        helper(['form', 'url']);

        $rules = [
            'username' => [
                'rules'  => "required|min_length[3]|is_unique[users.username,id,{$id}]",
                'errors' => [
                    'required'   => 'Username is required.',
                    'min_length' => 'Username must be at least 3 characters.',
                    'is_unique'  => 'This username is already taken.',
                ],
            ],
            'full_name' => [
                'rules'  => 'required|min_length[2]|alpha_space',
                'errors' => [
                    'required'    => 'Full name is required.',
                    'min_length'  => 'Full name must be at least 2 characters.',
                    'alpha_space' => 'Full name can only contain letters and spaces.',
                ],
            ],
        ];
        
        $file = $this->request->getFile('avatar');
        if ($file && $file->getError() !== UPLOAD_ERR_NO_FILE) {
            $rules['avatar'] = [
                'rules'  => 'max_size[avatar,2048]|is_image[avatar]|ext_in[avatar,png,jpg,jpeg]',
                'errors' => [
                    'max_size' => 'The profile picture cannot exceed 2MB.',
                    'is_image' => 'The file must be a valid image.',
                    'ext_in'   => 'The profile picture must be a JPG or PNG.',
                ],
            ];
        }

        if (!$this->validate($rules)) {
            $userModel = new UserModel();
            return view('users/edit', [
                'title' => 'Edit User',
                'current' => 'users',
                'user' => $userModel->find($id),
                'validation' => $this->validator
            ]);
        }

        $data = [
            'username'  => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
        ];

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            
            if (!is_dir(FCPATH . 'uploads/avatars')) {
                mkdir(FCPATH . 'uploads/avatars', 0777, true);
            }
            
            \Config\Services::image()
                ->withFile($file)
                ->fit(200, 200)
                ->save(FCPATH . 'uploads/avatars/' . $newName);
            
            $data['avatar'] = $newName;
        }

        $userModel = new UserModel();
        $userModel->update($id, $data);

        return redirect()->to('/users')->with('success', 'User updated successfully.');
    }
}
