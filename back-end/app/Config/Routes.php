<?php

namespace Config;

use App\Models\KostModel;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//Routers Database Table Kost
$routes->get('kost', 'KostController::index');
$routes->get('kost/(:segment)', 'KostController::show/$1');
$routes->post('kost', 'KostController::create');
$routes->post('kost/update/(:segment)', 'KostController::update/$1');
$routes->delete('kost/(:segment)', 'KostController::delete/$1');

//Routers Database Table Pemilik
$routes->get('pemilik', 'PemilikController::index');
$routes->get('pemilik/(:segment)', 'PemilikController::show/$1');
$routes->post('pemilik', 'PemilikController::create');
$routes->post('pemilik/update/(:segment)', 'PemilikController::update/$1');
$routes->delete('pemilik/(:segment)', 'PemilikController::delete/$1');

// Routes database Table Like
$routes->get('like', 'LikeController::index');
$routes->get('like/(:segment)', 'LikeController::show/$1');
$routes->post('like', 'LikeController::create');
$routes->post('like/update/(:segment)', 'LikeController::update/$1');
$routes->delete('like/(:segment)', 'LikeController::delete/$1');

// Routes database Table Kost_tersimpan
$routes->get('kost_tersimpan', 'KostTersimpanController::index');
$routes->get('kost_tersimpan/(:segment)', 'KostTersimpanController::show/$1');
$routes->post('kost_tersimpan', 'KostTersimpanController::create');
$routes->post('kost_tersimpan/update/(:segment)', 'KostTersimpanController::update/$1');
$routes->delete('kost_tersimpan/(:segment)', 'KostTersimpanController::delete/$1');


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
