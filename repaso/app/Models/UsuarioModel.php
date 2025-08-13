<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'empleado_id';
    protected $allowedFields = [
        'empleado_id', 
        'usuario', 
        'email', 
        'contrasena', 
        'estado', 
        'rol_id', 
    ];
}