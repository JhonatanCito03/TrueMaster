<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;

    protected $table = 'empleados';

    protected $fillable = [
            'primer_nombre',
            'segundo_nombre',
            'primer_apellido',
            'segundo_apellido',
            'cedula',
            'fecha_nacimiento',
            'fecha_integracion',
            'id_cargos',
            'cargos',
            'id_metasoficinas',
            'metasoficinas',
    ];
}
