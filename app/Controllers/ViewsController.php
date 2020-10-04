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

    /**
     * el metodo consultara los registros y retornara datos dependiendo del ID
     * en el caso de que el ID sea 'nada' lo que se retornaran seran todos los registros de la BD
     * en el caso de que sea un digito retornara todos los registros que concuerden con el ID
     * los registros retornados se parcean a Json
     */
    public function consultaAjax($request){

        $consulta = new ConsultaController();
        $id = $request->getParsedBody()['id'];
        if($id != 'nada'){
            $json = json_encode($consulta->consultaPorId($id));
        }else{
            $json = json_encode($consulta->consultaEmpleados());
        }
        echo $json;

    }
}
