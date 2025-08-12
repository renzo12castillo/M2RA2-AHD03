<?php

    namespace App\Controllers;
    use App\Models\PuestoModel; 

    class PuestoController extends BaseController
    {
        public function index(): string
        {
            $puesto = new PuestoModel(); 
            $datos['datos'] = $puesto->findAll(); 
            return view('puestos', $datos); 
        }

        public function agregar()
        {
            $puesto = new PuestoModel(); 
            $datos = [
                'puesto_id' => $this->request->getPost('txt_puesto_id'), 
                'puesto' => $this->request->getPost('txt_puesto')
            ]; 

            $puesto->insert($datos); 
            return $this->index(); 
        }

        public function eliminar($id)
        {
            $puesto = new PuestoModel(); 
            $puesto->delete($id); 
            return $this->index(); 
        }

        public function buscar($id)
        {
            $puesto = new PuestoModel(); 
            $datos['datos'] = $puesto->where(['puesto_id' => $id])->first(); 
            return view('form_modificar_puestos', $datos);
        }

        public function editar()
        {
            $datos = [
                'puesto_id' => $this->request->getPost('txt_puesto_id_edit'), 
                'puesto' => $this->request->getPost('txt_puesto_edit')
            ]; 

            $puesto = new PuestoModel(); 
            $puesto->update($datos['puesto_id'], $datos); 
            return $this->index();
        }
    }




?>