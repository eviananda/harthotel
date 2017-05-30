<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Welcome'; //Welcome //Controller

$route['buzz/readData'] = 'MyController/readData';
$route['halaman'] = 'MyController/goDashboard';
$route['member'] = 'MemberController/readData';
$route['admin_r'] = 'AdminController/readData';
$route['addBuzz'] = 'MyController/tambahArtikel';
$route['addMember'] = 'MemberController/tambahMember';
$route['MyController/do_update/(:any)'] = 'MyController/do_update/$1';
$route['login']='Welcome/login';
$route['controller'] = 'Controller/basisdata_cek';

//$route['(:any)'] = 'MyController/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



//$route['admin'] = 'admin/dashboard';

