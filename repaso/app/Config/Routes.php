<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/*RUTAS EMPLEADOS*/

$routes->get('/', 'EmpleadoController::index');
$routes->get('empleados', 'EmpleadoController::index');
$routes->get('eliminar_empleado/(:num)', 'EmpleadoController::eliminar/$1');
$routes->get('buscar_empleado/(:num)', 'EmpleadoController::buscar/$1');
$routes->post('editar_empleado', 'EmpleadoController::editar'); 
$routes->post('agregarEmpleado', 'EmpleadoController::agregar'); 


/*RUTAS EQUIPOS*/

$routes->get('equipos', 'EquipoController::index'); 
$routes->post('agregarEquipo', 'EquipoController::agregar');
$routes->get('eliminar_equipo/(:num)', 'EquipoController::eliminar/$1');
$routes->get('buscar_equipo/(:num)', 'EquipoController::buscar/$1'); 
$routes->post('editar_equipo', 'EquipoController::editar'); 

/*RUTAS MARCAS*/

$routes->get('marcas', 'MarcaController::index'); 
$routes->post('agregarMarca', 'MarcaController::agregar'); 
$routes->get('eliminar_marca/(:num)', 'MarcaController::eliminar/$1'); 
$routes->get('buscar_marca/(:num)', 'MarcaController::buscar/$1'); 
$routes->post('editar_marca', 'EmpleadoController::editar');