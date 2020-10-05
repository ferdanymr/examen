<?php
// aqui creamos la conexion a la BD
namespace App\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;

class BDController{
    protected $capsule;

    protected function iniciarControladorBD()
    {
        $this->capsule = new Capsule;

        /**
         * en la capsula de conexion agregamos los datos para conectarnos a la BD
         * en driver va a que tipo de bd nos conectaremos
         * 
         */

        $this->capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'examen',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);

        $this->capsule->setAsGlobal();

        $this->capsule->bootEloquent();
    }
    
}