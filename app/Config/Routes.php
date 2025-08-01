<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('auth', ['namespace' => 'IonAuth\Controllers'], function ($routes) {
    $routes->add('login', 'Auth::login');
    $routes->get('logout', 'Auth::logout');
    $routes->add('forgot_password', 'Auth::forgot_password');
    // $routes->get('/', 'Auth::index');
    // $routes->add('create_user', 'Auth::create_user');
    // $routes->add('edit_user/(:num)', 'Auth::edit_user/$1');
    // $routes->add('create_group', 'Auth::create_group');
    // $routes->get('activate/(:num)', 'Auth::activate/$1');
    // $routes->get('activate/(:num)/(:hash)', 'Auth::activate/$1/$2');
    // $routes->add('deactivate/(:num)', 'Auth::deactivate/$1');
    // $routes->get('reset_password/(:hash)', 'Auth::reset_password/$1');
    // $routes->post('reset_password/(:hash)', 'Auth::reset_password/$1');
    // ...
});
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/pelanggaran', 'Pelanggaran::index');
$routes->get('/pelanggaran/tambah', 'Pelanggaran::tambah');
$routes->get('/teguran', 'Teguran::index');
$routes->get('/teguran/tambah', 'Teguran::tambah');
$routes->get('/klasifikasi', 'Klasifikasi::index');
$routes->get('/klasifikasi/tambah', 'Klasifikasi::tambah');
$routes->get('/pelapor', 'Pelapor::index');
$routes->get('/pelapor/tambah', 'Pelapor::tambah');
