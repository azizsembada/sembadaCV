<?php

namespace Config;

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
$routes->set404Override(function () {
    return view('404');
});
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
$routes->get('/', 'Home::index');
$routes->get('/panel-admin', 'Admin::index', ['filter' => 'authentification']);
// --------------------------------------------------------------------
// Authentification Routing
// --------------------------------------------------------------------
$routes->get('/authentification', 'Authentification::index');
$routes->post('/auth-process', 'Authentification::auth');
$routes->get('/logout', 'Authentification::logout');
// --------------------------------------------------------------------
// Settings Routing
// --------------------------------------------------------------------
$routes->get('/settings', 'Settings::index', ['filter' => 'authentification']);
$routes->post('/settings-update', 'Settings::update', ['filter' => 'authentification']);
$routes->get('/settings-form', 'Settings::form', ['filter' => 'authentification']);
// --------------------------------------------------------------------
// Settings Routing
// --------------------------------------------------------------------
$routes->get('/user', 'User::index', ['filter' => 'authentification']);
$routes->post('/user/update', 'User::update', ['filter' => 'authentification']);
$routes->get('/user/form', 'User::form', ['filter' => 'authentification']);
// --------------------------------------------------------------------
// Sub Title Routing
// --------------------------------------------------------------------
$routes->get('/sub-title', 'SubTitle::index', ['filter' => 'authentification']);
$routes->get('/sub-title/read', 'SubTitle::read', ['filter' => 'authentification']);
$routes->get('/sub-title/search', 'SubTitle::searchData', ['filter' => 'authentification']);
$routes->get('/sub-title/edit', 'SubTitle::edit', ['filter' => 'authentification']);
$routes->post('/sub-title/update', 'SubTitle::update', ['filter' => 'authentification']);
$routes->get('/sub-title/form', 'SubTitle::form', ['filter' => 'authentification']);
$routes->get('/sub-title/data', 'SubTitle::load_data', ['filter' => 'authentification']);
// --------------------------------------------------------------------
// Main Skills Routing
// --------------------------------------------------------------------
$routes->get('/main-skills', 'MainSkills::index', ['filter' => 'authentification']);
$routes->get('/main-skills/read', 'MainSkills::read', ['filter' => 'authentification']);
$routes->get('/main-skills/search', 'MainSkills::searchData', ['filter' => 'authentification']);
$routes->post('/main-skills/create', 'MainSkills::create', ['filter' => 'authentification']);
$routes->get('/main-skills/edit', 'MainSkills::edit', ['filter' => 'authentification']);
$routes->post('/main-skills/update', 'MainSkills::update', ['filter' => 'authentification']);
$routes->get('/main-skills/delete', 'MainSkills::delete', ['filter' => 'authentification']);
$routes->get('/main-skills/form', 'MainSkills::form', ['filter' => 'authentification']);
$routes->get('/main-skills/data', 'MainSkills::load_data', ['filter' => 'authentification']);
// --------------------------------------------------------------------
// Services Routing
// --------------------------------------------------------------------
$routes->get('/services', 'Services::index', ['filter' => 'authentification']);
$routes->get('/services/read', 'Services::read', ['filter' => 'authentification']);
$routes->get('/services/search', 'Services::searchData', ['filter' => 'authentification']);
$routes->post('/services/create', 'Services::create', ['filter' => 'authentification']);
$routes->get('/services/edit', 'Services::edit', ['filter' => 'authentification']);
$routes->post('/services/update', 'Services::update', ['filter' => 'authentification']);
$routes->get('/services/delete', 'Services::delete', ['filter' => 'authentification']);
$routes->get('/services/form', 'Services::form', ['filter' => 'authentification']);
$routes->get('/services/data', 'Services::load_data', ['filter' => 'authentification']);
// --------------------------------------------------------------------
// Portfolio Routing
// --------------------------------------------------------------------
$routes->get('/portfolio', 'Portfolio::index', ['filter' => 'authentification']);
$routes->get('/portfolio/read', 'Portfolio::read', ['filter' => 'authentification']);
$routes->get('/portfolio/search', 'Portfolio::searchData', ['filter' => 'authentification']);
$routes->post('/portfolio/create', 'Portfolio::create', ['filter' => 'authentification']);
$routes->get('/portfolio/edit', 'Portfolio::edit', ['filter' => 'authentification']);
$routes->post('/portfolio/update', 'Portfolio::update', ['filter' => 'authentification']);
$routes->get('/portfolio/delete', 'Portfolio::delete', ['filter' => 'authentification']);
$routes->get('/portfolio/form', 'Portfolio::form', ['filter' => 'authentification']);
$routes->get('/portfolio/data', 'Portfolio::load_data', ['filter' => 'authentification']);
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
