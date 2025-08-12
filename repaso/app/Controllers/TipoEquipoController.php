<?php

    namespace App\Controllers;
    use App\Models\TipoEquipoModel;

    class TipoEquipoController extends BaseController
    {
        public function index(): string
        {
            $tipoEquipo = new TipoEquipoModel(); 
            $datos['datos'] = $tipoEquipo->findAll(); 
            return view('tipoequipo', $datos);
        }

        public function agregar()
        {
            $tipoEquipo = new TipoEquipoModel(); 
            $datos = [
                'tipo_equipo' => $this->request->getPost('txt_tipo_equipo_id'), 
                'nombre' => $this->request->getPost('txt_nombre')
            ]; 

            $tipoEquipo->insert($datos); 
            return $this->index(); 
        }
    }




?>