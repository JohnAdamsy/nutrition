<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "c_front";
$route['404_override'] = '';
$route['manageCompanies'] = "company/manageCompanies";
$route['manageUsers'] = "Users/manageUsers";
$route['manageVehicles'] = "vehicles/manageVehicles";
$route['editCompany/(:any)'] = "company/add_form/$1";
$route['openCompany/(:any)'] = "company/openCompany/$1";
$route['activate/(:any)'] = "c_front/activate/$1";
$route['prodOil'] = "c_oil/oilData";
$route['prodMaize'] = "c_maize/maizeData";
$route['prodWheat'] = "c_wheat/wheatData";
$route['passreset/(:any)']='c_auth/passreset';

$route['editproductionOil/(:any)'] = "c_oil/editproductionOil/$1";
$route['editproductionWheat/(:any)'] = "c_wheat/editproductionWheat/$1";
$route['editproductionMaize/(:any)'] = "c_maize/editproductionMaize/$1";

$route['viewproductionOil/(:any)'] = "c_oil/viewproductionOil/$1";
$route['viewproductionWheat/(:any)'] = "c_wheat/viewproductionWheat/$1";
$route['viewproductionMaize/(:any)'] = "c_maize/viewproductionMaize/$1";

$route['addproductionoil'] = "c_oil/addproductionOil";
$route['addproductionwheat'] = "c_wheat/addproductionWheat";
$route['addproductionmaize'] = "c_maize/addproductionMaize";

$route['adddatagain'] = "c_oversight/addgain";
$route['adddatakebs'] = "c_oversight/addkebs";
$route['adddatanl'] = "c_oversight/addnl";
$route['adddataco'] = "c_oversight/addco";

$route['dbdatagain'] = "c_oversight/mydbdata";
$route['dbdatakebs'] = "c_oversight/mydbdata";
$route['dbdatanl'] = "c_oversight/mydbdata";
$route['dbdataco'] = "c_oversight/mydbdata";

$route['marketdata'] = "c_oversight/dbdataadmin";

$route['openMarketData/co/(:any)'] = "c_oversight/addco/$1";
$route['openMarketData/gain/(:any)'] = "c_oversight/addgain/$1";
$route['openMarketData/nphls/(:any)'] = "c_oversight/addnl/$1";

$route['reportsgain'] = "c_oversight/reportsos";
$route['reportskebs'] = "c_oversight/reportsos";
$route['reportsnl'] = "c_oversight/reportsos";
$route['reportsco'] = "c_oversight/reportsos";

/*
$route['reportsgain'] = "c_oversight/reportsgain";
$route['reportskebs'] = "c_oversight/reportskebs";
$route['reportsnl'] = "c_oversight/reportsnl";
$route['reportsco'] = "c_oversight/reportsco";*/


//$route['loadTemplate'] = "/prodOil";

//$route['submit/c_form_salt/([a-z]+)']='c_front/vehicles';


/* End of file routes.php */
/* Location: ./application/config/routes.php */