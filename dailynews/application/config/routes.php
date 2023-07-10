<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'UserController';
$route['index'] = 'UserController/index';
$route['index/(:any)'] = 'UserController/index/$1';
$route['single/(:any)'] = 'UserController/single/$1';
$route['blog/(:any)'] = 'UserController/blog/$1';
$route['blog/(:any)/(:any)'] = 'UserController/blog/$1/$2';
$route['blog'] = 'UserController/blog';
$route['contact'] = 'UserController/contact';
$route['admin_index'] = 'AdminController/index';
$route['loginAct'] = 'AdminController/loginAct';
$route['logOut'] = 'AdminController/logOut';
$route['dashboard'] = 'AdminController/dashboard';
$route['news'] = 'AdminController/news';
$route['admin_list'] = 'AdminLoginController/admin_list';
$route['create_admin'] = 'AdminLoginController/index';
$route['createAdminAct'] = 'AdminLoginController/createAdminAct';
$route['admin_video_list'] = 'AdminVideoController/admin_video_list';
$route['admin_contact_list'] = 'AdminContactController/admin_contact_list';
$route['create_video'] = 'AdminVideoController/index';
$route['createVideoAdminAct'] = 'AdminVideoController/createVideoAdminAct';
$route['createContactAdminAct'] = 'AdminContactController/createContactAdminAct';
$route['create'] = 'AdminController/create';
$route['createAct'] = 'AdminController/createAct';
$route['deleteNews/(:any)'] = 'AdminController/deleteNews/$1';
$route['deleteAdminNews/(:any)'] = 'AdminLoginController/deleteAdminNews/$1';
$route['deleteVideoAdminNews/(:any)'] = 'AdminVideoController/deleteVideoAdminNews/$1';
$route['deleteContactAdminNews/(:any)'] = 'AdminContactController/deleteContactAdminNews/$1';
$route['updateNews/(:any)'] = 'AdminController/updateNews/$1';
$route['updateAdminNews/(:any)'] = 'AdminLoginController/updateAdminNews/$1';
$route['updateVideoAdminNews/(:any)'] = 'AdminVideoController/updateVideoAdminNews/$1';
$route['updateAct/(:any)'] = 'AdminController/updateAct/$1';
$route['updateAdminAct/(:any)'] = 'AdminLoginController/updateAdminAct/$1';
$route['updateVideoAdminAct/(:any)'] = 'AdminVideoController/updateVideoAdminAct/$1';
$route['detailNews/(:any)'] = 'AdminController/detailNews/$1';
$route['detailAdminNews/(:any)'] = 'AdminLoginController/detailAdminNews/$1';
$route['detailVideoAdminNews/(:any)'] = 'AdminVideoController/detailVideoAdminNews/$1';
$route['detailContactAdminNews/(:any)'] = 'AdminContactController/detailContactAdminNews/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
