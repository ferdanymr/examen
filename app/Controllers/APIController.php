<?php

namespace App\Controllers;
class APIController{

    /**
     * cuando llegue a este metodo se hara una consulta de todos los datos de la BD
     * despues se decodificaran en json y se mandaran como respuesta
     */
    public function getEmpleados(){
        
        $consulta = new ConsultaController();

        $json = json_encode($consulta->consultaEmpleados());

        echo $json;

    }


    /**
     * lo primero es que del $request obtendremos el path que contendra la ruta
     * para separarlo por el caracter '/', obtenemos el ultimo dato que es el id
     * hacemos una busqueda y desplegamos el resultado
     */
    public function getEmpleadoById($request){

        $data = $request->getUri()->getPath();

        $data = explode('/', $data);
        
        $id = $data[2];

        $consulta = new ConsultaController();

        $json = json_encode($consulta->consultaPorIdAPI($id));

        echo $json;

    }

    /**
     * esta consulta devolvera un registro al azar de la BD
     * traemos los datos de la BD, los contamos, generamos un aleatorio 
     * y desplegamos el registro del aleatorio
     */
    public function getEmpleado(){

        $consulta = new ConsultaController();

        $datos = $consulta->consultaEmpleados();

        $numeroDeDatos = count($datos);

        $json = json_encode($datos[rand(1, $numeroDeDatos-1)]);

        echo $json;

    }

    /**
     * recibimos los datos en crudo del envio de datos post
     * por eso mandamos a leer el archivo de entrada de php://input
     * para poder procesar la entrada, despues decodificamos el json a un 
     * array asociativo, validamos que esten todos los campos y que tengan un valor diferente
     * a vacio en la data recibida, si todo salio bien lo mandamos al registro donde pasaran por otra validacion.
     */
    public function agregarEmpleado(){
        $data = file_get_contents('php://input');
        $data = json_decode($data, true);
        $bandera = false;
        $error = '';

        $validator = new ValidatorController();

        if($validator->estanTodosLosParametros($data)){
            
            $registro = new RegistroController();

            //retorna un mensaje de como salio la operacion
            $json = [
                'Estado:' => $registro->registrarEmpleado($data)
            ];
            
            echo json_encode($json);
            

        }else{
            
            $json = [
                'Estado:' => 'Error en el Json. El fomato es {"name":"name","lastName":"lastName","secondLastName":"secondLastName", "birthday": "dd/mm/yyyy", "ingresos":xxxx.xx}'
            ];

            echo json_encode($json);
        }
    }

}