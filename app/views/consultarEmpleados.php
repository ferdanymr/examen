<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d350efeb91.js" crossorigin="anonymous"></script>

    <title>Consulta</title>
</head>

<body>

    <div class="modal-dialog text-center">
        <h1>Consulta de Empleados</h1>
    </div>

    <div class="container">

        <div class="row justify-content-center">
            <i class="fas fa-search" aria-hidden="true"></i>
            <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Ingrese el ID del empleado" aria-label="Search" name="parametro" id="BusquedaCampo">
        </div>

        <div class="row">

            <div class="col-sm-12">

                <div class="modal-dialog text-center">
                    <h3>Empleados</h3>
                </div>

                <div class="table-responsive-sm">
                    <table class="table" id="miTabla">

                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre(s)</th>
                                <th scope="col">Ap Paterno</th>
                                <th scope="col">Ap Materno</th>
                                <th scope="col">Fecha de Nacimiento </th>
                                <th scope="col">Ingreso Anual</th>
                            </tr>
                        </thead>
                        
                        <tbody id="datosTabla">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="<?php echo RUTA_SERVER ?>scripts/consulta.js"></script>
</body>

</html>