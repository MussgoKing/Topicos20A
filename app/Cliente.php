<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nombre', 'ap', 'am', 'sexo', 'telefono', 'correo', 'direccion', 'ecivil','institucion'];
}
