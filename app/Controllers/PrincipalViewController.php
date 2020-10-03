<?php

namespace App\Controllers;

class PrincipalViewController
{

    public function home(){
        require_once '../app/views/principal.php';
    }

    public function registro(){
        require_once '../app/views/agregarEmpleados.html';
    }


}
