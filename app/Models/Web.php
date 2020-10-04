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
        
        $map->get('gPrincipal', '/', [
            'controlador' =>  'App\Controllers\ViewsController',
            'accion' => 'home'
        ]);

        $map->get('gRegistro', '/registro', [
            'controlador' =>  'App\Controllers\ViewsController',
            'accion' => 'registro'
        ]);

        $map->get('gConsulta', '/consulta', [
            'controlador' =>  'App\Controllers\ViewsController',
            'accion' => 'consulta'
        ]);

        $map->post('ajaxRegistro', '/registro/datos', [
            'controlador' =>  'App\Controllers\ViewsController',
            'accion' => 'registroAjax'
        ]);

        $map->post('ajaxConsulta', '/consulta/id', [
            'controlador' =>  'App\Controllers\ViewsController',
            'accion' => 'consultaAjax'
        ]);
    }

}