<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\Auth;
use Config\Services;

class BaseController extends \App\Controllers\BaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        // Simple auth check for all admin controllers
        if (!session()->get('isLoggedIn') && service('router')->controllerName() !== '\App\Controllers\Admin\Auth') {
            header('Location: ' . base_url('admin/login'));
            exit;
        }
    }
}
