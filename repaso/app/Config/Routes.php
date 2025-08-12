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
$routes->post('editar_marca', 'MarcaController::editar');

/* RUTAS PUESTOS */

$routes->get('puestos', 'PuestoController::index');
$routes->post('agregarPuesto', 'PuestoController::agregar');
$routes->get('eliminar_puesto/(:num)', 'PuestoController::eliminar/$1');
$routes->get('buscar_puesto/(:num)', 'PuestoController::buscar/$1');
$routes->post('editar_puesto', 'PuestoController::editar');

/* RUTAS ROLES */ 

$routes->get('roles', 'RolController::index'); 
$routes->post('agregarRol', 'RolController::agregar'); 
$routes->get('eliminar_rol/(:num)', 'RolController::eliminar/$1'); 
$routes->get('buscar_rol/(:num)', 'RolController::buscar/$1'); 
$routes->post('editar_rol', 'RolController::editar');

/* RUTAS TIPO EQUIPO */
$routes->get('tipoequipo', 'TipoEquipoController::index');
$routes->post('agregarTipoEquipo', 'TipoEquipoController::agregar');  