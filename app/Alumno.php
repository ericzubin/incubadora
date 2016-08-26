<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
	protected $fillable = [
        'name',
        'email',
        'telefono'
         'carrera'
        'interes'
        'sexo'


    ];}
