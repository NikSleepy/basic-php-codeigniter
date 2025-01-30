<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/product', 'ControllerProduct::index');
$routes->get('/product/addproduct', 'ControllerProduct::create');
$routes->post('/product/store', 'ControllerProduct::store');
$routes->get('/product/edit/(:num)', 'ControllerProduct::edit/$1');
$routes->post('/product/update/(:num)', 'ControllerProduct::update/$1');
$routes->get('/product/delete/(:num)', 'ControllerProduct::delete/$1');
