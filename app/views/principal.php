<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <br><br><br>
    <div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
            <h1 class="display-2">¡¡Bienvenido!!</h1>
        </div>
    </div>
    <br><br><br><br>

    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h3 class="text-center">
                ¿Que accion desea realizar?
            </h3>
        </div>
    </div>

    <br><br><br><br>
    <div class="row">
        <div class="col-sm-4"></div>
        
        <div class="col-sm-2">
            <button id='reg' type="button" class="btn btn-success">Registrar</button>
        </div>

        <div class="col-sm-1"></div>
        
        <div class="col-sm-2">
            <button id="ver" type="button" class="btn btn-info">Visualizar</button>
        </div>
        
    </div>

    <script src="<?php echo RUTA_SERVER ?>scripts/principal.js"></script>
</body>
</html>