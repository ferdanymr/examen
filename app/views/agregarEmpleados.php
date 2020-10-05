<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <form id="form">

        <div class="modal-dialog text-center">
            <h3>Datos Personales</h3>
        </div>

        <div class="form-row">
            <div class="col-sm-4"></div>

            <div class="col-sm-4">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" required name="name" minlength="3" maxlength="35">
                <div class="invalid-feedback">Llena el campo</div>
                <div class="valid-feedback">Ok!</div>
            </div>

        </div>

        <div class="form-row">

            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <label for="firstLastName">Apellido Paterno</label>
                <input type="text" class="form-control" id="lastName" required name="lastName" minlength="3" maxlength="15">
                <div class="invalid-feedback">Llena el campo</div>
                <div class="valid-feedback">Ok!</div>
            </div>

        </div>

        <div class="form-row">

            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <label for="secondLastName">Apellido Materno</label>
                <input type="text" class="form-control" id="secondLastName" name="secondLastName" minlength="3" maxlength="15">
                <div class="invalid-feedback">Llena el campo</div>
                <div class="valid-feedback">Ok!</div>
            </div>

        </div>

        <div class="form-row">

            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <label for="birthday"> Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="birthday" id="birthday" required min="1600-01-01" max="2020-10-08">
                <div class="invalid-feedback">Llena el campo</div>
                <div class="valid-feedback">Ok!</div>
            </div>

        </div>

        <div class="form-row">

            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <label for="ingresos">Ingresos anuales</label>
                <input type="number" class="form-control" id="ingresosA" name="ingresosA" min="0" step="0.01">
                <div class="invalid-feedback">Llena el campo</div>
                <div class="valid-feedback">Ok!</div>
            </div>

        </div>
        <br>
        <div class="form-row">

            <div class="col-sm-5"></div>

            <div class="col-sm-2">
                <button id="reg" class="btn btn-success" style="margin-left: 50px;">
                    Registrarme
                </button>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="<?php echo RUTA_SERVER ?>scripts/registro.js"></script>
</body>

</html>