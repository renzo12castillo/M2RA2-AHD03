<?php

    namespace App\Controllers;
    use App\Models\RolModel;

    class RolController extends BaseController
    {
        public function index(): string
        {
            $rol = new RolModel(); 
            $datos['datos'] = $rol->findAll(); 
            return view('roles', $datos); 
        }

        public function agregar()
        {
            $rol = new RolModel(); 
            $datos = [
                'rol_id' => $this->request->getPost('txt_rol_id'), 
                'nombre' => $this->request->getPost('txt_nombre'),
                'descripcion' => $this->request->getPost('txt_descripcion'),
            ]; 

            $rol->insert($datos); 
            return $this->index(); 
        }

        public function eliminar($id)
        {
            $rol = new RolModel(); 
            $rol->delete($id); 
            return $this->index(); 
        }

        public function buscar($id)
        {
            $rol = new RolModel(); 
            $datos['datos'] = $rol->where(['rol_id' => $id])->first(); 
            return view('form_modificar_roles', $datos);
        }

        public function editar()
        {
            $datos = [
                'rol_id' => $this->request->getPost('txt_rol_id_edit'), 
                'nombre' => $this->request->getPost('txt_nombre_edit'),
                'descripcion' => $this->request->getPost('txt_descripcion_edit')
            ]; 

            print_r($datos);
            $rol = new RolModel(); 
            $rol->update($datos['rol_id'], $datos);
            return $this->index();
        }
    }





?>