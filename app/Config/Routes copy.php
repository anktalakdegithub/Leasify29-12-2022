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
$routes->setDefaultController('Welcome');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Welcome::index');
$routes->get('/live', 'Welcome::lease');
$routes->get('/about', 'Welcome::about');
$routes->get('/contact', 'Welcome::contact');
$routes->get('/login', 'Welcome::login');
$routes->get('/signup', 'Welcome::signup');
$routes->post('/loginfront', 'Welcome::loginfront');
$routes->get('/404', 'Welcome::notfound');
$routes->get('/policy', 'Welcome::policy');
$routes->get('/terms', 'Welcome::terms');




$routes->get('/customer/index', 'Home::index');
$routes->get('/customer/customer', 'Home::customer');
$routes->get('/customer/customerdetails', 'Home::customerdetails');
$routes->get('/customer/edit_rfq', 'Home::edit_rfq');
$routes->get('/customer/investor', 'Home::investor');
$routes->get('/customer/nbfc', 'Home::nbfc');
$routes->get('/customer/createrfq', 'Home::new_rfq');
$routes->get('/customer/newrfq2', 'Home::newrfq2');
$routes->get('/customer/payments', 'Home::payment');
$routes->get('/customer/quote', 'Home::quote');
// $routes->get('/customer/rfq_details', 'Home::rfq_details');
$routes->get('/customer/rfqdetails/(:any)', 'Home::rfq_details/$1');
$routes->get('/customer/rfq', 'Home::rfq');
$routes->get('/customer/login', 'Home::login');
$routes->get('/customer/logout', 'Login::logout');
$routes->get('/customer/signup', 'Home::register');
$routes->get('/customer/register', 'Home::signup');
$routes->get('/customer/verifyotp', 'Home::otpmobile');
$routes->get('/customer/profile', 'Home::myaccount');
$routes->post('/customer/addrfq', 'Home::addrfq');
$routes->post('/customer/registeration', 'Login::registeration');
$routes->post('/customer/process_login', 'Login::process_login');
$routes->post('/customer/myaccountkyc', 'Home::myaccountkyc');


// Admin Routes
$routes->get('/admin/home', 'Admin::index');
$routes->post('/admin/approvedcustomer', 'Admin::approvedcustomer');
$routes->get('/admin/create_project', 'Admin::create_project');
// $routes->get('/admin/customer', 'Admin::customer');
// $routes->get('/admin/customerdetails', 'Admin::customerdetails');
$routes->get('/admin/rfq', 'Admin::customer');
$routes->get('/admin/rfqdetails', 'Admin::rfqdetails');
$routes->get('/admin/edit_cust', 'Admin::edit_cust');
$routes->get('/admin/edit_rfq', 'Admin::edit_rfq');
$routes->get('/admin/investor_details', 'Admin::investor_details');
$routes->get('/admin/investor_bid_detail', 'Admin::investor_bid_detail');
$routes->get('/admin/investor', 'Admin::investor');
$routes->get('/admin/login', 'Admin::login');
$routes->get('/admin/nbfc_details', 'Admin::nbfc_details');
$routes->get('/admin/nbfc_bid_detail', 'Admin::nbfc_bid_detail');
$routes->get('/admin/nbfc', 'Admin::nbfc');
$routes->get('/admin/new_cust', 'Admin::new_cust');
$routes->get('/admin/new_rfq', 'Admin::new_rfq');
$routes->get('/admin/new_rfqs', 'Admin::new_rfqs');
$routes->get('/admin/payment', 'Admin::payment');
$routes->get('/admin/Register', 'Admin::Register');
$routes->get('/admin/rfq_details', 'Admin::rfq_details');
$routes->get('/admin/rfq_bid_detail', 'Admin::rfq_bid_detail');
$routes->get('/admin/indicativeproposal', 'Admin::indicativeproposal');
$routes->get('/admin/indicativeproposals', 'Admin::indicativeproposals');
$routes->post('/admin/createproject', 'Admin::createproject');






//nbfc
$routes->get('/nbfc/index', 'Nbfc::index');
$routes->get('/nbfc/thanks', 'Nbfc::thanks');
$routes->get('/nbfc/edit_rfq', 'Nbfc::edit_rfq');
$routes->get('/nbfc/investor', 'Nbfc::investor');
$routes->get('/nbfc/login', 'Nbfc::login');
$routes->get('/nbfc/money', 'Nbfc::money');
$routes->get('/nbfc/my_vault', 'Nbfc::my_vault');
$routes->get('/nbfc/newrfq2', 'Nbfc::newrfq2');
$routes->get('/nbfc/new_rfq', 'Nbfc::new_rfq');
$routes->get('/nbfc/order', 'Nbfc::order');
$routes->get('/nbfc/payment', 'Nbfc::payment');
$routes->get('/nbfc/rfq_details', 'Nbfc::rfq_details');
$routes->get('/nbfc/rfqlist', 'Nbfc::rfqlist');
$routes->post('/nbfc/deleteproposal', 'Nbfc::deleteproposal');
// $routes->get('/nbfc/nbfcproposaldetails', 'Nbfc::nbfcproposaldetails');

$routes->get('/nbfc/nbfcproposaldetails/(:any)', 'Nbfc::nbfcproposaldetails/$1');
$routes->get('/nbfc/proposalsubmit', 'Nbfc::rfqs');
$routes->post('/nbfc/money', 'Nbfc::addmoney');
$routes->post('/nbfc/withdrawmoney', 'Nbfc::withdrawmoney');
$routes->post('/nbfc/placebid', 'Nbfc::addbid');
$routes->post('/nbfc/nbfc_login', 'Nbfc::nbfc_login');
$routes->post('/nbfc/fetch_category', 'Nbfc::fetch_category');
$routes->get('/nbfc/logout', 'Nbfc::logout');

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
