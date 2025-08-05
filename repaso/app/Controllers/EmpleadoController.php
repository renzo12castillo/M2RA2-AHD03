<?php

namespace App\Controllers;
use App\Models\EmpleadoModel; 

class EmpleadoController extends BaseController
{
    public function index(): string
    {
        $empleado = new EmpleadoModel();
        $datos['datos'] = $empleado->findAll(); 
        return view('empleados', $datos);
    }

    public function agregar()
    {
        $empleado = new EmpleadoModel(); 
        $datos = [
            'empleado_id' => $this->request->getPost('txt_id_add'),
            'nombre' => $this->request->getPost('txt_nombre_add'),
            'apellido' => $this->request->getPost('txt_apellido_add'),
            'telefono' => $this->request->getPost('txt_telefono_add'),
            'puesto_id' => $this->request->getPost('txt_puesto_id_add'),
            'fecha_nacimiento' => $this->request->getPost('txt_fecha_nacimiento_add')
        ]; 
        $empleado->insert($datos); 
        return $this->index();
    }

    public function eliminar($id)
    {      
        // echo "ID enviado ".$id;
        $empleado = new EmpleadoModel(); 
        $empleado->delete($id); 
        return $this->index(); 
    }

    public function buscar($id)
    {
        $empleado = new EmpleadoModel(); 
        $datos['datos']=$empleado->where(['empleado_id'=>$id])->first();
        return view('form_modificar_empleados', $datos); 
    }

    public function editar() 
    {
        $datos=[
            'empleado_id'=>$this->request->getPost('txt_id'),
            'nombre'=>$this->request->getPost('txt_nombre'),
            'apellido'=>$this->request->getPost('txt_apellido'),
            'telefono'=>$this->request->getPost('txt_numero'),
            'puesto_id'=>$this->request->getPost('txt_id_puesto'),
            'fecha_nacimiento'=>$this->request->getPost('txt_fecha_nacimiento')
        ];

        print_r($datos); 

        $empleado = new EmpleadoModel();
        $empleado->update($datos['empleado_id'],$datos); 
        return $this->index();
    }
}
