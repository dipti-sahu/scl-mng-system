<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'MainC';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['homepage'] = 'MainC/index';
$route['tec-register'] = 'MainC/tec_register';
$route['SList'] = 'MainC/student_list';
$route['login'] = 'MainC/login';
$route['data-submit'] = 'MainC/data_submit';
$route['edt-data'] = 'MainC/edt_data';
$route['upd-data'] = 'MainC/upd_data';
$route['register-Tdata']= 'MainC/register_Tdata';
$route['dlt-data'] = 'MainC/dlt_data';
$route['Teacher-list']= 'MainC/Teacher_list';
$route['edt-Tdata'] = 'MainC/edt_Tdata';
$route['upd-Tdata'] = 'MainC/upd_Tdata';
$route['dlt-Tdata'] = 'MainC/dlt_Tdata';
$route['login-us'] = 'MainC/login_us';
$route['logout'] = 'MainC/logout';