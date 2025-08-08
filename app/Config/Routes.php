<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('auth', ['namespace' => 'IonAuth\Controllers'], function ($routes) {
    $routes->add('register', 'Auth::create_user');
    $routes->add('login', 'Auth::login');
    $routes->get('logout', 'Auth::logout');
    $routes->add('forgot_password', 'Auth::forgot_password');
    // $routes->get('/', 'Auth::index');
    $routes->add('edit_user/(:num)', 'Auth::edit_user/$1');
    // $routes->add('create_group', 'Auth::create_group');
    // $routes->get('activate/(:num)', 'Auth::activate/$1');
    // $routes->get('activate/(:num)/(:hash)', 'Auth::activate/$1/$2');
    // $routes->add('deactivate/(:num)', 'Auth::deactivate/$1');
    // $routes->get('reset_password/(:hash)', 'Auth::reset_password/$1');
    // $routes->post('reset_password/(:hash)', 'Auth::reset_password/$1');
    // ...
});

$routes->get('/dashboard', 'Dashboard::index');
//pelanggaran
$routes->group('pelanggaran', ['filter' => 'auth-filter'], function ($routes) {
    $routes->get('/', 'Pelanggaran::index');
    $routes->get('tambah', 'Pelanggaran::tambah');
});
//klasifikasi
$routes->group('klasifikasi', ['filter' => ['auth-filter', 'auth-admin']], function ($routes) {
    $routes->get('/', 'Klasifikasi::index');
});
//teguran
$routes->group('teguran', ['filter' => ['auth-filter', 'auth-admin']], function ($routes) {
    $routes->get('/', 'Teguran::index');
});
//pelapor
$routes->group('pelapor', ['filter' => ['auth-filter', 'auth-admin']], function ($routes) {
    $routes->get('/', 'Pelapor::index');
});
//user
$routes->group('user', ['filter' => ['auth-filter', 'auth-admin']], function ($routes) {
    $routes->get('/', 'User::index');
    $routes->delete('delete/(:num)', 'User::delete/$1');
});


//Flash message dengan javascript
$routes->get('/get-flash-message', 'MessageController::getFlashMessage');
