<?php

    namespace App\Controllers;
    use App\Models\MarcaModel;

    class MarcaController extends BaseController
    {
        public function index(): string
        {
            $marca = new MarcaModel(); 
            $datos['datos'] = $marca->findAll(); 
            return view('marcas', $datos); 
        }

        public function agregar() 
        {
            $marca = new MarcaModel(); 
            $datos = [
                'marca_id' => $this->request->getPost('txt_marca_id'), 
                'marca' => $this->request->getPost('txt_marca')
            ]; 
            $marca->insert($datos); 
            return $this->index();
        }

        public function eliminar($id)
        {
            $marca = new MarcaModel(); 
            $marca->delete($id); 
            return $this->index(); 
        }

        public function buscar($id)
        {
            $marca = new MarcaModel(); 
            $datos['datos']=$marca->where(['marca_id'])->first(); 
            return view('form_modificar_marcas', $datos);
        }

        public function editar()
        {
            $datos = [
                'marca_id' => $this->request->getPost('txt_marca_id_edit'), 
                'marca' => $this->request->getPost('txt_marca_edit')
            ];  
            print_r($datos);
            $marca = new MarcaModel(); 
            $marca->update($datos['marca_id'], $datos); 
            return $this->index();

        }
    }





?>