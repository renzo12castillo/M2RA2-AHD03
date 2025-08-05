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