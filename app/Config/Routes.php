<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');
$routes->get('messages', 'Messages::index');
$routes->get('messages/create', 'Messages::create');
$routes->post('messages/store', 'Messages::store');
$routes->get('messages/edit/(:num)', 'Messages::edit/$1');
$routes->post('messages/update/(:num)', 'Messages::update/$1');
$routes->get('messages/delete/(:num)', 'Messages::delete/$1');

