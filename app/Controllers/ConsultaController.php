<?php

namespace App\Controllers;

use App\Models\Usuario;

class ConsultaController extends BDController{

    public function __construct(){
        $this->iniciarControladorBD();
    }

    /**
     * por medio del orm realizamos una busqueda de los registros que
     * coincidan con el ID proporcionado cruzando las tablas 
     * usuario y datos 
     */
    public function consultaPorId($id){
        return Usuario::join('datos', 'usuario.id', '=', 'datos.id')
        ->select(
            'usuario.id',
            'usuario.name',
            'usuario.lastName',
            'usuario.secondLastName',
            'datos.birthday',
            'datos.ingresosA'
        )
        ->where('usuario.id', 'like', '%' . $id . '%')
        ->get();
    }

    /**
     * obtenemos todos los registros de los empleados en la BD
     */
    public function consultaEmpleados(){
        return Usuario::join('datos', 'usuario.id', '=', 'datos.id')
        ->select(
            'usuario.id',
            'usuario.name',
            'usuario.lastName',
            'usuario.secondLastName',
            'datos.birthday',
            'datos.ingresosA'
        )
        ->get();
    }

}