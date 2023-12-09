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

$routes->get('/api/transaksi', 'TransaksiController::getTransaksi');
$routes->get('/api/transaksi/(:segment)', 'TransaksiController::getTransaksiById/$1');
$routes->post('/api/transaksi', 'TransaksiController::createTransaksi');
$routes->put('/api/transaksi/(:segment)', 'TransaksiController::updateTransaksi/$1');
$routes->delete('/api/transaksi/(:segment)', 'TransaksiController::deleteTransaksi/$1');
