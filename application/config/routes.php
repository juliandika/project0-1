<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['products'] = 'products/index';
$route['logout'] = "login/logout";
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
