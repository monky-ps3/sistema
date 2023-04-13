<?php

namespace App\Models;

use CodeIgniter\Model;

class Medico_Model extends Model
{
    protected $table      = 'medico';
    protected $primaryKey = 'id_medico';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['m_nombre', 'm_apellido_p', 'm_apellido_m', 'direccion', 'telefono', 'sexo', 'fecha_nacimiento', 'edad', 'status', 'fecha_registro'];

    // Dates
    protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    //protected $createdField  = 'created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;


 
}
