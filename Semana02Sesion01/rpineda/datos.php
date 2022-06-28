<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de datos</title>
    <link
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        rel="stylesheet" id="bootstrap-css">
</head>
<body>
    <form action="procesarCertificado.php" method="post">

    </form>

    <form class="form-horizontal" 
        action="procesarCertificado.php" 
        method="post" >
    <fieldset>

    <!-- Form Name -->
    <legend>Ingresa tus datos</legend>

    <div class="form-group">
        <label class="col-md-4 control-label" for="username">Nombre</label>  
        <div class="col-md-6">
            <input id="nombre" name="nombre" type="text" placeholder="ingresa tu nombre " class="form-control input-md" required="">
            <span class="help-block">Debes ingresar tu nombre</span>  
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="username">Apellido</label>  
        <div class="col-md-6">
            <input id="apellido" name="apellido" type="text" placeholder="ingresa tu apellido " class="form-control input-md" required="">
            <span class="help-block">Debes ingresar tu apellido</span>  
        </div>
    </div>

    <!-- Button (Double) -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="enviar">Acción</label>
        <div class="col-md-8">
            <button id="enviar" name="enviar" class="btn btn-success">Enviar</button>
            <button id="resetar" name="resetar" class="btn btn-warning">Limpiar</button>
        </div>
    </div>

    </fieldset>
</form>
<script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>
</html>