<?php

namespace Config;
$routes = Services::routes();


$routes->setDefaultNamespace('App\Controllers');

$routes->get('liste', 'KullaniciEylemler::index');
$routes->get('ekle', 'KullaniciEylemler::ekle');
$routes->post('kaydet', 'KullaniciEylemler::kaydet');
$routes->get('duzenle/(:num)', 'KullaniciEylemler::duzenle/$1');
$routes->post('guncelle', 'KullaniciEylemler::guncelle');
$routes->get('sil/(:num)', 'KullaniciEylemler::sil/$1');

//varsayılan
$routes->get('/', 'Home::index');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
