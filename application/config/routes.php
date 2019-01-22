<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';

$route['colleges'] = 'colleges/index';
$route['colleges/blocked'] = 'colleges/blocked';
$route['colleges/(:any)'] = 'colleges/view/$1';
$route['colleges/pages/totalViews'] = 'pages/totalViews';

$route['researches'] = 'researches/index';
$route['researches/(:any)'] = 'researches/view/$1';
$route['researches/pages/totalViews'] = 'pages/totalViews';

$route['check/local'] = 'check/local';
$route['check/online'] = 'check/online';
$route['check/(:any)'] = 'check/view/$1';
$route['check/pages/totalViews'] = 'pages/totalViews';

$route['activities'] = 'pages/activities';
$route['totalViews'] = 'pages/totalViews';

$route['users'] = 'users/index';
$route['users/pages/totalViews'] = 'pages/totalViews';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
