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
    $routes->get('/', 'Admin\Projects::index');
    $routes->group('projects', function($routes) {
        $routes->get('/', 'Admin\Projects::index');
        $routes->get('create', 'Admin\Projects::create');
        $routes->post('store', 'Admin\Projects::store');
        $routes->get('edit/(:num)', 'Admin\Projects::edit/$1');
        $routes->post('update/(:num)', 'Admin\Projects::update/$1');
        $routes->get('delete/(:num)', 'Admin\Projects::delete/$1');
    });

    // Services CRUD
    $routes->group('services', function($routes) {
        $routes->get('/', 'Admin\Services::index');
        $routes->get('create', 'Admin\Services::create');
        $routes->post('store', 'Admin\Services::store');
        $routes->get('edit/(:num)', 'Admin\Services::edit/$1');
        $routes->post('update/(:num)', 'Admin\Services::update/$1');
        $routes->get('delete/(:num)', 'Admin\Services::delete/$1');
    });

    // Testimonials CRUD
    $routes->group('testimonials', function($routes) {
        $routes->get('/', 'Admin\Testimonials::index');
        $routes->get('create', 'Admin\Testimonials::create');
        $routes->post('store', 'Admin\Testimonials::store');
        $routes->get('edit/(:num)', 'Admin\Testimonials::edit/$1');
        $routes->post('update/(:num)', 'Admin\Testimonials::update/$1');
        $routes->get('delete/(:num)', 'Admin\Testimonials::delete/$1');
    });
});
