<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
            rel="stylesheet" id="bootstrap-css">

</head>
<body>
<form class="form-horizontal" action="procesar.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Ingreso</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">Usuario</label>  
  <div class="col-md-6">
  <input id="username" name="username" type="text" placeholder="ingresa tu nombre de usuario" class="form-control input-md" required="">
  <span class="help-block">Debes ingresar tu nombre de usuario</span>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Contraseña</label>
  <div class="col-md-6">
    <input id="password" name="password" type="password" placeholder="Ingresa tu contraseña" class="form-control input-md" required="">
    <span class="help-block">Ingresa tu contraseña</span>
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



<form class="form-horizontal" 
    method="POST"
    action="procesarArchivo.php" 
    enctype="multipart/form-data"  >
    <fieldset>

    <!-- Form Name -->
    <legend>Archivo 1</legend>

    <!-- File Button --> 
    <div class="form-group">
        <label class="col-md-4 control-label" for="archivo">Archivo</label>
        <div class="col-md-4">
            <input id="archivo" name="archivo" class="input-file" type="file"> <!--accept="image/*"> -->
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

<form class="form-horizontal" 
    method="POST"
    action="procesarArchivo2.php" 
    enctype="multipart/form-data"  >
    <fieldset>

    <!-- Form Name -->
    <legend>Archivo 2</legend>

    <!-- File Button --> 
    <div class="form-group">
        <label class="col-md-4 control-label" for="archivo">Archivo</label>
        <div class="col-md-4">
            <input id="archivo" name="archivo" class="input-file" type="file" accept="image/*"> 
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