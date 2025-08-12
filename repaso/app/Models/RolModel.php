<?php

namespace App\Models;

use CodeIgniter\Model;

class RolModel extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'rol_id';
    protected $allowedFields = [
        'rol_id', 
        'nombre', 
        'descripcion', 
    ];
}