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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//route Evenement
$route['evenement'] = 'evenement';
$route['evenement/signalement'] = 'evenement/signalement';
//route article
$route['evenement/(:num)'] = 'evenement/show/$1';
//route Signalation
$route['administration/signalement'] = 'admin_signalement';



$route['auth/login'] = 'auth';
$route['register/attempt'] = 'auth/register';
$route['login/attempt'] = 'auth/login_attempt';
$route['logout'] = 'auth/logout';
/**
 * Formations / Modules
 */
$route['Home'] = 'home';
$route['comparateur'] = 'compare';

$route['pokemon'] = 'pokemon/index';
$route['pokemon/(:num)'] = 'pokemon/index/$1';

$route['administration/user'] = 'admin_user';
$route['administration/user/viewedit'] = 'admin_user/getviewedit';
$route['administration/user/viewdelete'] = 'admin_user/getviewdelete';
$route['administration/user/edit'] = 'admin_user/edit';
$route['administration/user/delete'] = 'admin_user/delete';
//$route['comparateur/(:num)/(:num)'] = 'compare/index/$1/$2';


/***
 * AJAX
 */
$route['compare-pokemons/(:num)/(:num)'] = 'compare/comparePokemons/$1/$2';
$route['getPokemon/(:num)'] = 'profile/getPokemonbyId/$1';


/***
 * Routes modifications pokémons
 */

$route['administration/pokemon'] = 'admin_pokemon/index';
$route['administration/pokemon/getViewEdit'] = 'admin_pokemon/getViewEdit';
$route['administration/pokemon/edit'] = 'admin_pokemon/edit';
$route['administration/pokemon/getSearchEdit'] = 'admin_pokemon/getSearchEdit';
$route['administration/pokemon/add'] = 'admin_pokemon/add';
$route['administration/pokemon/add/1'] = 'admin_pokemon/add/1';


/***
 * classement Pokémons
 */

$route['profil/pokemon/favoris'] = 'classement';
$route['profil/pokemon/vote'] = 'classement/vote';

/***
 * routes articles
 */

$route['administration/article'] = 'admin_article/index';
$route['administration/article/edit'] = 'admin_article/edit';
$route['administration/article/edit/(:num)'] = 'admin_article/edit/$1';
$route['administration/article/add'] = 'admin_article/add';
$route['administration/article/add/1'] = 'admin_article/add/1';
$route['administration/article/delete/(:num)'] = 'admin_article/delete/$1';
