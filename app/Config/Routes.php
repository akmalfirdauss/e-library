<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */




$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login_submit');
$routes->get('/logout', 'Auth::logout');
//param get & post
$routes->get('/', 'Auth::login');
$routes->get('/room', 'Home::room'); // Pertemuan 2 PW2
$routes->get('/post_request', 'Form::post_request');
$routes->post('/post_response', 'Form::post_response');
$routes->get('/get_request', 'Form::get_request');
$routes->get('/get_response/(:segment)/(:segment)', 'Form::get_response/$1/$2');

//crud single table
$routes->get('/kategori', 'Kategori::list');
$routes->get('/kategori/insert', 'Kategori::insert');
$routes->post('/kategori/insert', 'Kategori::insert_save');

$routes->get('/kategori/(:segment)', 'Kategori::update/$1');
$routes->post('/kategori/(:segment)', 'Kategori::update_save/$1');
$routes->get('/kategori/delete/(:segment)', 'Kategori::delete/$1');


$routes->get('/provinsi', 'Provinsi::list');
$routes->get('/provinsi/insert', 'Provinsi::insert');
$routes->post('/provinsi/insert', 'Provinsi::insert_save');

$routes->get('/provinsi/(:segment)', 'Provinsi::update/$1');
$routes->post('/provinsi/(:segment)', 'Provinsi::update_save/$1');
$routes->get('/provinsi/delete/(:segment)', 'Provinsi::delete/$1');

/*1-many table*/
$routes->get('/buku', 'Buku::list', ['filter' => 'authGuard']);
$routes->get('/buku/insert', 'Buku::insert');
$routes->post('/buku/insert', 'Buku::insert_save');
$routes->get('/buku/(:segment)', 'Buku::update/$1');
$routes->post('/buku/(:segment)', 'Buku::update_save/$1');
$routes->get('/buku/delete/(:segment)', 'Buku::delete/$1');

$routes->get('/kota', 'Kota::list');
$routes->get('/kota/insert', 'Kota::insert');
$routes->post('/kota/insert', 'Kota::insert_save');
$routes->get('/kota/(:segment)', 'Kota::update/$1');
$routes->post('/kota/(:segment)', 'Kota::update_save/$1');
$routes->get('/kota/delete/(:segment)', 'Kota::delete/$1');

$routes->get('/satuan_suhu', 'SatuanSuhu::list');

$routes->get('/konversi_suhu', 'KonversiSuhu::list');
$routes->get('/konversi_suhu/insert', 'KonversiSuhu::insert');
$routes->post('/konversi_suhu/insert', 'KonversiSuhu::insert_save');
$routes->get('/konversi_suhu/(:segment)', 'KonversiSuhu::update/$1');
$routes->post('/konversi_suhu/(:segment)', 'KonversiSuhu::update_save/$1');
$routes->get('/konversi_suhu/delete/(:segment)', 'KonversiSuhu::delete/$1');

//crud Many-Many table
$routes->get('/peminjaman', 'Peminjaman::list');
$routes->get('/peminjaman_buku/(:segment)', 'PeminjamanBuku::list/$1');
$routes->get('/peminjaman_buku/insert/(:segment)', 'PeminjamanBuku::insert/$1');
$routes->post('/peminjaman_buku/insert/(:segment)', 'PeminjamanBuku::insert_save/$1');
$routes->get('/peminjaman_buku/delete/(:segment)', 'PeminjamanBuku::delete/$1');
//end crud Many-Many table

$routes->get('/buku_export_xls', 'BukuExport::export_xls');
$routes->get('/buku_export_pdf', 'BukuExport::export_pdf');

$routes->get('/kota_export_xls', 'KotaExport::export_xls');
$routes->get('/kota_export_pdf', 'KotaExport::export_pdf');

$routes->get('/chart/pie', 'Chart::pie');
$routes->get('/chart/line', 'Chart::line');

$routes->get('/peminjaman', 'Peminjaman::list', ['filter' => 'authGuard']);
$routes->get('/peminjaman/insert', 'Peminjaman::insert', ['filter' => 'authGuard']);
$routes->post('/peminjaman/insert', 'Peminjaman::insert_save', ['filter' => 'authGuard']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
