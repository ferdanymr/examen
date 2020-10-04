<?php

namespace App\Models;

class Web{

    /**
     * En un Objeto map se define una ruta 
     * primero el tipo de peticion: get, post, etc.
     * despues (nombre de la ruta, ruta, handler)
     * el handler puede ser una funcion, un pedaso de codigo a ejecutar o en su caso 
     * un arreglo como el que coloque donde se especifica el controlador, y el metodo a ejecutar
     */

    public function cargarRutas($map){
        
        $map->get('gPrincipal', RUTA_URL , [
            'controlador' =>  'App\Controllers\ViewsController',
            'accion' => 'home'
        ]);

        $map->get('gRegistro', RUTA_URL . 'registro', [
            'controlador' =>  'App\Controllers\ViewsController',
            'accion' => 'registro'
        ]);

        $map->get('gConsulta', RUTA_URL . 'consulta', [
            'controlador' =>  'App\Controllers\ViewsController',
            'accion' => 'consulta'
        ]);

        $map->post('ajaxRegistro', RUTA_URL . 'registro/datos', [
            'controlador' =>  'App\Controllers\ViewsController',
            'accion' => 'registroAjax'
        ]);

        $map->post('ajaxConsulta', RUTA_URL . 'consulta/id', [
            'controlador' =>  'App\Controllers\ViewsController',
            'accion' => 'consultaAjax'
        ]);

        $map->get('getAPI', RUTA_URL . 'empleados', [
            'controlador' =>  'App\Controllers\APIController',
            'accion' => 'getEmpleados'
        ]);

        /**
         * en empleado/{id} estamos diciendo que  id puede traer cualquier valor
         */
        $map->get('getAPI2', RUTA_URL . 'empleado/{id}', [
            'controlador' =>  'App\Controllers\APIController',
            'accion' => 'getEmpleadoById'
        ]);

        $map->get('getAPI3', RUTA_URL . 'empleado', [
            'controlador' =>  'App\Controllers\APIController',
            'accion' => 'getEmpleado'
        ]);

        $map->post('postAPI', RUTA_URL . 'empleado', [
            'controlador' =>  'App\Controllers\APIController',
            'accion' => 'agregarEmpleado'
        ]);
    }

}