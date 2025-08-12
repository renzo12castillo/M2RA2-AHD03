<?php

namespace App\Models;

use CodeIgniter\Model;

class TipoEquipoModel extends Model
{
    protected $table = 'tipo_equipo';
    protected $primaryKey = 'tipo_equipo';
    protected $allowedFields = [
        'tipo_equipo', 
        'nombre', 
    ];
}