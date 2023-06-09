<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
 //$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');

//$routes->group('dashboard',function($routes){
  //  $routes->presenter('pelicula');
  //  $routes->presenter('categoria');

//});
//$routes->delete('pelicula/1', 'Pelicula::delete');

//$routes->get('pelicula', 'Dashboard\Pelicula::index');
//agruamiento de rutas 
//$routes->group('/',['namespace'=>'App\Controllers\Dashboard'],function($routes){
  //  $routes->get('pelicula', 'Pelicula::index');
 // $routes->get('pelicula', 'Category::index');
 // $routes->get('pelicula', 'Tag::index');
//});


//$routes->get('/Pelicula/new', 'pelicula::new');
//$routes->get('/pelicula', 'Pelicula::index');

//$routes->presenter('pelicula',['only'=>['index','update','new','create','show','edit']]);
//$routes->presenter('pelicula',['except'=>['index']]);
//$routes->resource('pelicula',['namespace'=>'App\Controllers\Dashboard']);
$routes->presenter('pelicula',['namespace'=>'App\Controllers\Dashboard']);
$routes->presenter('categoria',['namespace'=>'App\Controllers\Dashboard']);
/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
