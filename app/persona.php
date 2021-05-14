<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    protected $table = 'persona';
    protected $fillable = ['nombre', 'apellido','fechaNacimiento','genero','email','telefono','calle','codigoPostal'];
}
