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
$routes->get('/thankyou', 'Welcome::thankyou');
$routes->get('/terms', 'Welcome::terms');
$routes->post('/add_money', 'Addmoney::index'); 
$routes->post('/payment_response', 'Addmoney::payment_response');
$routes->post('/process_signup', 'Login::process_signup');
$routes->post('/savecondata', 'Welcome::savecondata');




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
$routes->post('/customer/process_otp', 'Login::process_otp');
$routes->post('/customer/myaccountkyc', 'Home::myaccountkyc');



// Admin Routes
$routes->get('/admin/home', 'Admin::index');
$routes->post('/admin/approvedcustomer', 'Admin::approvedcustomer');
// $routes->get('/admin/proposal_form', 'Admin::proposal_form');

$routes->get('/admin/create_project', 'Admin::create_project');
// $routes->post('/admin/updateproject', 'Admin::updateproject');
$routes->get('/admin/customer', 'Admin::customer');
$routes->get('/admin/customerdetails', 'Admin::customerdetails');
$routes->get('/admin/rfq', 'Admin::rfq');
$routes->get('/admin/rfqdetails', 'Admin::rfqdetails');
$routes->get('/admin/edit_cust', 'Admin::edit_cust');
$routes->post('/admin/update_user', 'Admin::update_user');
$routes->get('/admin/edit_rfq', 'Admin::edit_rfq');
$routes->post('/admin/update_rfq', 'Admin::update_rfq');
$routes->get('/admin/investor_details', 'Admin::investor_details');
$routes->get('/admin/investor_bid_detail', 'Admin::investor_bid_detail');
$routes->get('/admin/investor', 'Admin::investor');
$routes->post('/admin/login_process', 'Admin::login_process');
$routes->get('/admin/login', 'Admin::login');
$routes->get('/admin/nbfc_details', 'Admin::nbfc_details');
$routes->get('/admin/nbfc_bid_detail', 'Admin::nbfc_bid_detail');
$routes->get('/admin/nbfc', 'Admin::nbfc');
$routes->get('/admin/new_cust', 'Admin::new_cust');
$routes->get('/admin/new_rfq', 'Admin::new_rfq');
$routes->get('/admin/new_rfqs', 'Admin::new_rfqs');
$routes->get('/admin/payment', 'Admin::payment');
$routes->get('/admin/withdrawmoney', 'Admin::withdrawmoney');
$routes->post('admin/ismoneyadded', 'Admin::ismoneyadded');
$routes->post('admin/isverified', 'Admin::isverified');
$routes->get('/admin/Register', 'Admin::Register');
$routes->get('/admin/rfq_details', 'Admin::rfq_details');
$routes->get('/admin/proposal_details', 'Admin::proposal_details');
$routes->post('/publish_proposal', 'Admin::publish_proposal');
$routes->get('/admin/logout', 'Admin::logout');
$routes->post('/update_status', 'Admin::update_bid');
$routes->post('/add_payment', 'Admin::add_payment');
$routes->post('/delete_proposal', 'Admin::delete_proposal');
$routes->post('/delete_rfq', 'Admin::delete_rfq');
$routes->post('/delete_cust', 'Admin::delete_cust');



$routes->post('/admin/searchindicative', 'Admin::searchindicative');
$routes->post('/admin/searchnbfc', 'Admin::searchnbfc');
$routes->post('/admin/searcrfq', 'Admin::searcrfq');
$routes->post('/admin/searchcust', 'Admin::searchcust');
$routes->post('/admin/searchpayment', 'Admin::searchpayment');
$routes->post('/admin/searchinvestor', 'Admin::searchinvestor');
$routes->get('/admin/rfq_bid_detail', 'Admin::rfq_bid_detail');
$routes->get('/admin/indicativeproposal', 'Admin::indicativeproposal');
$routes->get('/admin/edit_proposal', 'Admin::edit_proposal');
$routes->get('/admin/indicativeproposals', 'Admin::indicativeproposals');
$routes->post('/admin/createproject', 'Admin::createproject');
$routes->post('/admin/updateproject', 'Admin::updateproject');





//nbfc
$routes->get('/user/index', 'Nbfc::index');
$routes->get('/user/thanks', 'Nbfc::thanks');
// 22-11-22
$routes->get('/user/paymentdetails', 'Nbfc::paymentdetails');
$routes->post('/user/prodetails', 'Nbfc::prodetails');
// end 22-22-22
$routes->get('/user/verification', 'Nbfc::verification');
$routes->get('/user/profile', 'Nbfc::myaccount');
$routes->post('/user/myaccountkyc', 'NBFC::myaccountkyc');

$routes->get('/user/edit_rfq', 'Nbfc::edit_rfq');
$routes->get('/user/investor', 'Nbfc::investor');
// $routes->get('/nbfc/login', 'Nbfc::login');
$routes->get('/user/login', 'Nbfc::login');
$routes->get('/user/money', 'Nbfc::money');
$routes->get('/user/my_vault', 'Nbfc::my_vault');
$routes->get('/user/newrfq2', 'Nbfc::newrfq2');
$routes->get('/user/new_rfq', 'Nbfc::new_rfq');
$routes->get('/user/order', 'Nbfc::order');
$routes->get('/user/payment', 'Nbfc::payment');
$routes->get('/user/rfq_details', 'Nbfc::rfq_details');
$routes->get('/user/rfqlist', 'Nbfc::rfqlist');

$routes->get('/user/newproposallist', 'Nbfc::newproposallist');
$routes->get('/user/newproposalsingle', 'Nbfc::newproposalsingle');
$routes->post('/nbfc/deleteproposal', 'Nbfc::deleteproposal');
// $routes->get('/nbfc/nbfcproposaldetails', 'Nbfc::nbfcproposaldetails');

$routes->get('/user/nbfcproposaldetails/(:any)', 'Nbfc::nbfcproposaldetails/$1');
$routes->get('/user/proposalsubmit', 'Nbfc::rfqs');
$routes->post('/nbfc/money', 'Nbfc::addmoney');
$routes->post('/nbfc/withdrawmoney', 'Nbfc::withdrawmoney');
$routes->post('/nbfc/placebid', 'Nbfc::addbid');
$routes->post('/nbfc/nbfc_login', 'Nbfc::nbfc_login');
$routes->post('/nbfc/fetch_category', 'Nbfc::fetch_category');
$routes->post('/nbfc/fetch_past', 'Nbfc::fetch_past');
$routes->get('/user/logout', 'Nbfc::logout');
$routes->get('/user/forgotpassword', 'Nbfc::forgotpassword');
$routes->get('/user/password_reset', 'Nbfc::password_reset');
$routes->post('/nbfc/nbfc_fp', 'Nbfc::nbfc_fp');
$routes->post('/nbfc/savenewresetpassword', 'Nbfc::savenewresetpassword');

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
