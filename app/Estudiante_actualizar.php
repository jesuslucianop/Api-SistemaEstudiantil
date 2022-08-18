<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante_actualizar extends Model
{
    protected $table= "Estudiante_2021_2";
    public $timestamps = false;
    protected $fillable = [
        'matricula', 'cedula', 'nombres',
        'apellidos', "estado_civil", 'nacionalidad', 'Lugar_nacimiento',
        'ciudad', 'direccion', 'Telefono_casa', 'Telefono_celular','quantity'
    ];
}
