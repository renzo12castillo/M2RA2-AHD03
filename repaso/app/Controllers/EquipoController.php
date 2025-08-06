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

        public function agregar()
        {
            $equipo = new EquipoModel(); 
            $datos = [
                'equipo_id' => $this->request->getPost('txt_equipo_id'), 
                'no_serie' => $this->request->getPost('txt_no_serie'), 
                'marca_id' => $this->request->getPost('txt_marca_id'),
                'descripcion' => $this->request->getPost('txt_descripcion'),
                'fecha_compra' => $this->request->getPost('txt_fecha_compra'),
                'precio' => $this->request->getPost('txt_precio'),
                'tipo_equipo' => $this->request->getPost('txt_tipo_equipo'),
                'empleado_id' => $this->request->getPost('txt_empleado_id')
            ]; 

            $equipo->insert($datos); 
            return $this->index(); 
        }

        public function eliminar($id)
        {
            $equipo = new EquipoModel(); 
            $equipo->delete($id); 
            return $this->index(); 
        }

        public function buscar($id)
        {
            $equipo = new EquipoModel(); 
            $datos['datos']=$equipo->where(['equipo_id'=>$id])->first(); 
            return view('form_modificar_equipos', $datos);
        }

        public function editar()
        {
            $datos = [
                'equipo_id' => $this->request->getPost('txt_id_equipo_edit'), 
                'no_serie' => $this->request->getPost('txt_no_de_serie_edit'), 
                'marca_id' => $this->request->getPost('txt_marca_id_edit'),
                'descripcion' => $this->request->getPost('txt_descripcion_edit'),
                'fecha_compra' => $this->request->getPost('txt_fecha_compra_edit'),
                'precio' => $this->request->getPost('txt_precio_edit'),
                'tipo_equipo' => $this->request->getPost('txt_tipo_equipo_edit'),
                'empleado_id' => $this->request->getPost('txt_empleado_id_edit')
            ]; 

            print_r($datos);
            $equipo = new EquipoModel(); 
            $equipo->update($datos['equipo_id'], $datos);
            return $this->index();
        }
    }



?>