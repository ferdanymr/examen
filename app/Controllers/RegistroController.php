<?php

namespace App\Controllers;

use App\Models\Datos;
use App\Models\Usuario;
use Exception;

class RegistroController extends BDController
{

    //en el contructor inicializaremos la coneccion a la BD
    public function __construct()
    {

        $this->iniciarControladorBD();
    }

    /**
     * encerramos el bloque en try catch por cualquier error que se presente
     * 
     * creamos un objeto de la clase Usuario y a cada uno de sus campos le asignaremos
     * el dato correspondiente
     * despues ejecutaremos el metodo save() que lo guardara en la BD
     * una vez guardado creamos un objeto de la clase datos para guardar su 
     * fecha de nacimiento e ingresos mensuales para posteriormente guardarlo en la BD
     * si todo sale bien retornaremos un mensaje de empleado guardado con exito.
     */
    public function registrarEmpleado($request)
    {

        try {

            $validator = new ValidatorController();
            
            //validamos todos los campos que van a ser subidos a la BD
            $errores = $validator->validarCampos($request);
            
            //si no hay errores en los datos procedera a guardarlos
            if (count($errores) === 0) {

                $empleado = new Usuario();
                $empleado->name = $request['name'];
                $empleado->lastName = $request['lastName'];
                $empleado->secondLastName = $request['secondLastName'];
                $empleado->save();

                $datos = new Datos();
                $datos->id = $empleado->id;
                $datos->birthday = date("Y/m/d", strtotime($request['birthday']));
                $datos->ingresosA = $request['ingresosA'];
                $datos->save();
                
                return 'Empleado guardado con exito';
            }else{

                //si hay errores se concatenaran en una cadena de texto y se mostraran
                $cadenaErrores = '';
                for ($i=0; $i < count($errores); $i++) { 
                    $cadenaErrores .= "" . $errores[$i] . PHP_EOL;
                }
                return $cadenaErrores;
            }
        } catch (Exception $e) {
            return $e;
        }
    }
}
