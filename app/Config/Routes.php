<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tentang', 'Home::tentang');
$routes->get('/visi', 'Home::visi');
$routes->get('/struktur', 'Home::struktur');
$routes->get('/tugas', 'Home::tugas');
$routes->get('/pjlp', 'Home::pjlp');
$routes->get('/lembaga', 'Home::lembaga');
$routes->get('/layanan', 'Home::layanan');
$routes->get('/berita', 'Home::berita');
$routes->get('/banjir', 'Home::banjir');

$routes->post('/chatbot', 'Chatbot::handle');
$routes->get('/chatbot', 'Home::chatbot');


// INI ROUTES ADMIN

$routes->get('/login', 'Admin::login');
