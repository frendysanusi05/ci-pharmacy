<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$filter = ['filter' => 'authFilter'];

$routes->get('/', 'Home::index');
$routes->get('/logins', 'AuthController::index');
$routes->post('/logins', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/medicines', 'ObatController::index', $filter);
$routes->get('/medicines/add', 'ObatController::addForm', $filter);
$routes->post('/medicines/add', 'ObatController::createObat', $filter);
$routes->get('/editMedicine/(:segment)', 'ObatController::editForm/$1', $filter);
$routes->post('/editMedicine/(:num)(/(:segment))?', 'ObatController::updateObat/$1/$2', $filter);
$routes->get('/deleteMedicineForm/(:segment)', 'ObatController::deleteForm/$1', $filter);
$routes->post('/deleteMedicine/(:num)(/(:segment))?', 'ObatController::deleteObat/$1/$2', $filter);

$routes->get('/order', 'PesananController::index', $filter);

$routes->get('/transaction', 'TransaksiController::index', $filter);


$routes->group('api', function ($routes) {
    $routes->post('login', 'AuthController::loginAPI');
    
    $filter = ['filter' => 'authFilter'];
    $routes->get('recommendSupplement', 'PesananController::recommendSupplement', $filter);

    $routes->group('obat', function ($routes) {
        $filter = ['filter' => 'authFilter'];

        $routes->get('', 'ObatController::getObat');
        $routes->get('(:segment)', 'ObatController::getObatById/$1');
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

    $routes->group('pesanan', function ($routes) {
        $filter = ['filter' => 'authFilter'];

        $routes->get('', 'PesananController::getPesanan', $filter);
        $routes->get('(:segment)', 'PesananController::getPesananById/$1', $filter);
        $routes->get('pesanan/(:segment)', 'PesananController::getPesananByIdPesanan/$1', $filter);
        $routes->post('', 'PesananController::createPesanan', $filter);
        $routes->put('(:segment)', 'PesananController::updatePesanan/$1', $filter);
        $routes->delete('(:segment)', 'PesananController::deletePesanan/$1', $filter);
    });
});
