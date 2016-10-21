<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
	protected $fillable = [
        'id',
        'nombre',
        'email',
        'telefono',
        'carrera',
        'interes',
        'sexo',


    ];}
