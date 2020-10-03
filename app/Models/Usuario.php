<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * primero indicamos que extenderemos de Model para usar el orm de eloquent
 * 
 * especificamos que la tabla a la que hara referencia esta clase sera usuario
 * 
 * definimos la llave primaria
 */

class Usuario extends Model{
    
    protected $table = 'usuario';
    protected $primaryKey = 'id';
    
}