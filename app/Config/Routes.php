<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/(:num)', 'Home::detail/$1');
$routes->get('/create', 'Home::create');
$routes->post('/save', 'Home::save');
$routes->get('/mustahiq', 'Home::mustahiq');
$routes->get('/cari/(:any)', 'Home::search/$1');

service('auth')->routes($routes);

$routes->group("admin", ["namespace" => "\Controllers", "filter" => "group:admin"], static function ($routes) {
    $routes->get('/data', 'Admin::identities');
    $routes->get('/group', 'Admin::group');
    $routes->get('/user', 'Admin::user');
});
