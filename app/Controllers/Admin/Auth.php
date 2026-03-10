<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/admin/dashboard');
        }
        return view('admin/login');
    }

    public function attemptLogin()
    {
        $adminModel = new AdminModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $admin = $adminModel->where('username', $username)->first();

        if ($admin && password_verify($password, $admin['password'])) {
            session()->set([
                'admin_id'   => $admin['id'],
                'username'   => $admin['username'],
                'isLoggedIn' => true,
            ]);
            return redirect()->to('/admin/dashboard');
        }

        return redirect()->back()->with('error', 'Invalid username or password');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }
}
