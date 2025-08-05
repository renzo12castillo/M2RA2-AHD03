<?php

    namespace App\Controllers;
    use App\Models\EquipoModel; 

    class EquipoController extends BaseController
    {
        public function index(): string
        {
            $equipo = new EquipoModel(); 
            $datos['datos'] = $equipo->findAll(); 
            return view('equipos', $datos); 
        }
    }



?>