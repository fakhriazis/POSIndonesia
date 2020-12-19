<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/form', 'Home::form');
$routes->get('/data', 'Home::data');


$routes->get('/admin', 'Admin/CSAdmin::viewAdmin');
$routes->get('/admin/tambah', 'Admin/CSAdmin::viewTambahAdmin');

$routes->get('/layanan', 'Admin/CSAdmin::viewLayanan');

$routes->get('/document', 'Admin/CSAdmin::viewDocument');
$routes->get('/document/detail', 'Admin/CSAdmin::viewDocumentDetail');

$routes->get('/dashboard', 'Admin/CSAdmin::dashboard');

<<<<<<< HEAD
//routes user
$routes->get('/user', 'User/Admin::index');

//==routes user/referensi
$routes->get('/user/referensi', 'User/Admin::referensi');
$routes->get('/user/referensi/respon_code', 'User/Admin::referensiResponCode');
$routes->get('/user/referensi/data_mitra_produk', 'User/Admin::referensiDataMitraProduk');

//==routes user/gangguan
$routes->get('/user/gangguan/gangguan_sementara', 'User/Admin::gangguanSementara');
$routes->get('/user/gangguan/info_gangguan', 'User/Admin::infoGangguan');

$routes->get('/user/troubleshooting', 'User/Admin::troubleshooting');
$routes->get('/user/kelolaFaq', 'User/Admin::kelolaFaq');
$routes->get('/user/kelolaFaq/tambah', 'User/Admin::viewtambahfaq');
$routes->get('/user/catatan', 'User/Admin::catatan');
$routes->get('/user/catatan/tambah', 'User/Admin::viewTambahCatatan');
$routes->get('/user/catatan/tambah/aksi', 'User/Admin::TambahCatatan');
$routes->get('/user/berita', 'User/Admin::berita');
$routes->get('/user/form', 'User/Admin::form');
$routes->get('/user/data', 'User/Admin::data');
$routes->get('/user/troubleshooting', 'User/Admin::troubleshooting');
$routes->get('/user/referensi', 'User/Admin::referensi');
$routes->get('/user/report', 'User/Admin::report');
=======
>>>>>>> b10f1d030fe5e9aebf3861e36069eb3e71e246f8


/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
