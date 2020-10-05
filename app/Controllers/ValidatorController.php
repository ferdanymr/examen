<?php
namespace App\Controllers;

use Valitron\Validator as v;

class ValidatorController{

    /**
     * recibe un array y verifica si todos los parametros especificados en el validador 
     * estan dentro del array
     */
    public function estanTodosLosParametros($array){
        
        $validator = new v($array);
        $validator->rules([
            'required' => [
            ['name'],
            ['lastName'],
            ['secondLastName'],
            ['birthday'],
            ['ingresosA']
        ]
        ]);

        return $validator->validate();
    }

    public function validarCampos($data){
        $error = [];

        $validator = new v($data);
        
        //evaluamos la longitud de name y que solo sean letras
        $validator->rules([
            'lengthBetween' => [
                [['name'], 3, 35]
            ]
        ]);

        if(!$validator->validate()){
            array_push($error, 'ERROR en campo nombre, solo puede tener caracteres alfabeticos y con una longitud de 3 a 35');
        }

        $validator = new v($data);
        //evaluamos la longitud de lastName y que solo tenga letras
        $validator->rules([
            'lengthBetween' => [
                [['lastName'], 3, 15]
            ],
            'alpha' => [
                [['lastName']]
            ]
        ]);

        if(!$validator->validate()){
            array_push($error, 'ERROR en el Apellido Paterno, solo puede tener caracteres alfabeticos y con una longitud de 3 a 35');
        }

        $validator = new v($data);
        //evaluamos la longitud de secondLastName y que solo tenga letras
        $validator->rules([
            'lengthBetween' => [
                [['secondLastName'], 3, 15]
            ],
            'alpha' => [
                [['secondLastName']]
            ]
        ]);

        if(!$validator->validate()){
            array_push($error, 'ERROR en el Apellido Materno, solo puede tener caracteres alfabeticos y con una longitud de 3 a 35');
        }

        $validator = new v($data);
        //evaluamos la fecha y su formato
        $validator->rules([
            'date' => [
                [['birthday']]
            ],
            'dateFormat' => [
                [['birthday'], 'd-m-Y']
            ]
        ]);
        
        if(!$validator->validate()){
            array_push($error, 'ERROR la fecha no es valida, el formato es dd-mm-YYYY');
        }

        $validator = new v($data);
        //evaluamos que ingreso sea numerico
        $validator->rules([
            'numeric' => [
                [['ingresosA']]
            ],
            'min' => [
                [['ingresosA'], 0.00]
            ]
        ]);

        if(!$validator->validate()){
            array_push($error, 'ERROR el campo ingreso, debe de ser numerico y mayor a 0');
        }

        
        return $error;
    }

}