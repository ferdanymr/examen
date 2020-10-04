<?php

namespace App\Controllers;

class ViewsController
{

    public function home(){
        require_once '../app/views/principal.php';
    }

    public function registro(){
        require_once '../app/views/agregarEmpleados.php';
    }

    public function consulta(){
        require_once '../app/views/consultarEmpleados.php';
    }
    
    /**
     * el metodo que registrara nuevos empleados
     * en el body del request viene toda la informacion del empleado,
     * extraemos los datos y se los mandamos a un metodo del registroController
     */
    public function registroAjax($request){

        $data = $request->getParsedBody()['data'];
        $registro = new RegistroController();
        var_dump($registro->registrarEmpleado($data));

    }
}
