<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$filter = ['filter' => 'authFilter'];

$routes->get('/', 'Home::index');
// $routes->match(['get', 'post'], '/login', 'AuthController::login');
$routes->get('/logins', 'AuthController::index');
$routes->post('/logins', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/medicines', 'ObatController::index', $filter);

$routes->group('api', function ($routes) {
    $routes->group('obat', function ($routes) {
        $filter = ['filter' => 'authFilter'];

        $routes->get('', 'ObatController::getObat', $filter);
        $routes->get('(:segment)', 'ObatController::getObatById/$1', $filter);
        $routes->post('', 'ObatController::createObat', $filter);
        $routes->put('(:segment)', 'ObatController::updateObat/$1', $filter);
        $routes->delete('(:segment)', 'ObatController::deleteObat/$1', $filter);
    });

    $routes->group('transaksi', function ($routes) {
        $filter = ['filter' => 'authFilter'];

        $routes->get('', 'TransaksiController::getTransaksi', $filter);
        $routes->get('(:segment)', 'TransaksiController::getTransaksiById/$1', $filter);
        $routes->post('', 'TransaksiController::createTransaksi', $filter);
        $routes->put('(:segment)', 'TransaksiController::updateTransaksi/$1', $filter);
        $routes->delete('(:segment)', 'TransaksiController::deleteTransaksi/$1', $filter);
    });
});
