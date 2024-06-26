<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->get('/', 'Home::index');

$routes->get('/glossario/result/list/(:alpha)', 'Result::list/$1');
$routes->post('/glossario/result/search', 'Result::search');
$routes->get('/glossario/result/definition/(:num)', 'Result::definition/$1');

$routes->get('/glossario/info/about', 'Info::about');
$routes->get('/glossario/info/team', 'Info::team');

$routes->get('/glossario/contact/message', 'Contact::message');
$routes->get('/glossario/contact/sendMessage', 'Contact::sendMessage');
$routes->get('/glossario/contact/submission', 'Contact::submission');
$routes->post('/glossario/contact/sendEmail', 'Contact/sendEmail');

$routes->get('/glossario/result/notfound', 'Result::notfound');

$routes->get('/glossario/admin/form', 'FormAdmin::formAdmin');
$routes->post('/glossario/formAdmin/save', 'FormAdmin::save');
$routes->get('/glossario/formAdmin/update/(:num)', 'FormAdmin::update/$1');
$routes->get('/glossario/formAdmin/delete/(:num)', 'FormAdmin::delete/$1');

$routes->get('/glossario/session/index', 'Session::index');
$routes->get('/glossario/session/loginForm', 'Session::loginForm');
$routes->post('/glossario/session/login', 'Session::login');
$routes->get('/glossario/session/logout', 'Session::logout');

$routes->post('/glossario/emailSubmission', 'SendEmail::sendEmailSubmission');
$routes->post('/glossario/emailMessage', 'SendEmail::sendEmailMessage');


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
