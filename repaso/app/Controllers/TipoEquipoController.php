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

        public function eliminar($id)
        {
            $tipoEquipo = new TipoEquipoModel(); 
            $tipoEquipo->delete($id); 
            return $this->index(); 
        }

        public function buscar($id)
        {
            $tipoEquipo = new TipoEquipoModel(); 
            $datos['datos'] = $tipoEquipo->where(['tipo_equipo' => $id])->first();
            return view('form_modificar_tipoequipo', $datos);
        }

        public function editar()
        {
            $datos = [
                'tipo_equipo' => $this->request->getPost('txt_tipo_equipo_id_edit'), 
                'nombre' => $this->request->getPost('txt_nombre_edit')
            ]; 

            print_r($datos);
            $tipoEquipo = new TipoEquipoModel(); 
            $tipoEquipo->update($datos['tipo_equipo'], $datos); 
            return $this->index(); 
        }
    }




?>