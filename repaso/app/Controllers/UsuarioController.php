<?php

    namespace App\Controllers;
    use App\Models\UsuarioModel;

    class UsuarioController extends BaseController
    {
        public function index(): string
        {
            $usuario = new UsuarioModel(); 
            $datos['datos'] = $usuario->findAll(); 
            return view('usuarios', $datos); 
        }

        public function agregar()
        {
            $usuario = new UsuarioModel(); 
            $datos = [
                'empleado_id' => $this->request->getPost('txt_empleado_id'), 
                'usuario' => $this->request->getPost('txt_usuario'), 
                'email' => $this->request->getPost('txt_email'),
                'contrasena' => $this->request->getPost('txt_contrasena'),
                'estado' => $this->request->getPost('txt_estado'),
                'rol_id' => $this->request->getPost('txt_rol_id')
            ]; 

            $usuario->insert($datos); 
            return $this->index(); 
        }

        public function eliminar($id)
        {
            $usuario = new UsuarioModel(); 
            $usuario->delete($id); 
            return $this->index(); 
        }

        public function buscar($id)
        {
            $usuario = new UsuarioModel(); 
            $datos['datos'] = $usuario->where(['empleado_id' => $id])->first(); 
            return view('form_modificar_usuarios', $datos);
        }

        public function editar()
        {
            $datos = [
                'empleado_id' => $this->request->getPost('txt_empleado_id_edit'), 
                'usuario' => $this->request->getPost('txt_usuario_edit'), 
                'email' => $this->request->getPost('txt_email_edit'),
                'contrasena' => $this->request->getPost('txt_contrasena_edit'),
                'estado' => $this->request->getPost('txt_estado_edit'),
                'rol_id' => $this->request->getPost('txt_rol_id_edit')
            ]; 

            $usuario = new UsuarioModel(); 
            $usuario->update($datos['empleado_id'], $datos); 
            return $this->index(); 
        }
    }






?>