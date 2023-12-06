<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/api/obat', 'ObatController::getObat');
$routes->get('/api/obat/(:segment)', 'ObatController::getObatById/$1');
$routes->post('/api/obat', 'ObatController::createObat');
$routes->put('/api/obat/(:segment)', 'ObatController::updateObat/$1');
$routes->delete('/api/obat/(:segment)', 'ObatController::deleteObat/$1');
