<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana 02 Sesion 02</title>
    <link
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
            rel="stylesheet" id="bootstrap-css">
</head>
<body>
<form class="form-horizontal" 
    method="POST"
    action="procesar.php" >
<fieldset>

<!-- Form Name -->
<legend>Datos Personales</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Nombre</label>  
  <div class="col-md-6">
  <input id="nombre" name="nombre" type="text" placeholder="escribe tu nombre" class="form-control input-md" required="">
  <span class="help-block">escribe tu nombre</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="apellido">Apellido</label>  
  <div class="col-md-6">
  <input id="apellido" name="apellido" type="text" placeholder="escribe tu apellido" class="form-control input-md" required="">
  <span class="help-block">escribe tu apellido</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="direccion">Dirección</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="direccion" name="direccion">escribe tu dirección</textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="enviar">Acción</label>
  <div class="col-md-8">
    <button id="enviar" name="enviar" class="btn btn-success">Enviar</button>
    <button id="resetear" name="resetear" class="btn btn-danger">Resetear</button>
  </div>
</div>
</fieldset>
</form>

<?php

$nombreArchivo = "clientes.txt";

$file = fopen($nombreArchivo,"r");
if($file){
    while(!feof($file)){
        echo fgets($file)."<br>";
    }   

}

?>
<script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>
</html>