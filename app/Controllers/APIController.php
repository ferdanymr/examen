<?php

namespace App\Controllers;

use Illuminate\Support\Facades\Response;
use Laminas\Diactoros\Response\JsonResponse;

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

        $json = json_encode($consulta->consultaPorId($id));

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

    public function agregarEmpleado(){
        $data = file_get_contents('php://input');
        $data = json_decode($data, true);
        $bandera = false;
        $error = '';

        if(array_key_exists('name', $data)){

            if(array_key_exists('lastName', $data)){

                if(array_key_exists('secondLastName', $data)){

                    if(array_key_exists('birthday', $data)){

                        if(array_key_exists('ingresosA', $data)){
                            $bandera = true;
                        }else{
                            $error = 'ingresosA';
                        }

                    }else{
                        $error = 'birthday';
                    }

                }else{
                    $error = 'secondLastName';
                }

            }else{
                $error = 'lastName';
            }

        }else{
            $error = 'name';
        }

        if($bandera){
            
            $registro = new RegistroController();

            echo $registro->registrarEmpleado($data);

        }else{
            echo "falta el campo $error." . ' El fomato es "{"name":"name","lastName":"lastName","secondLastName":"secondLastName", "birthday": "dd/mm/yyyy", "ingresos":"xxxx.xx"}"';
        }
    }

}