<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * primero indicamos que extenderemos de Model para usar el orm de eloquent
 * 
 * especificamos que la tabla a la que hara referencia esta clase sera datos
 * 
 * definimos la llave primaria
 * 
 * aclaramos que la llave primaria no es autoincrementable
 * 
 */

class Datos extends Model{
    
    protected $table = 'datos';
    protected $primaryKey = 'id';
    public $incrementing = false;

}