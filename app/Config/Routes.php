<?php

use Config\Services;

$routes = Services::routes();

// Standard routes
$routes->get('/', 'Home::index');

// Admin routes
$routes->group('admin', function($routes) {
    // Auth
    $routes->get('login', 'Admin\Auth::login');
    $routes->post('login', 'Admin\Auth::attemptLogin');
    $routes->get('logout', 'Admin\Auth::logout');

    // Projects CRUD
    $routes->get('/', 'Admin\Projects::index'); // Redirect to projects by default
    $routes->group('projects', function($routes) {
        $routes->get('/', 'Admin\Projects::index');
        $routes->get('create', 'Admin\Projects::create');
        $routes->post('store', 'Admin\Projects::store');
        $routes->get('edit/(:num)', 'Admin\Projects::edit/$1');
        $routes->post('update/(:num)', 'Admin\Projects::update/$1');
        $routes->get('delete/(:num)', 'Admin\Projects::delete/$1');
    });
});
