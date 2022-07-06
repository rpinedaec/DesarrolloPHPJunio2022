<?php
$nombre = $_REQUEST["nombre"];
$apellido = $_REQUEST["apellido"];
$direccion = $_REQUEST["direccion"];


$nombreArchivo = "clientes.txt";

if(!file_exists($nombreArchivo)){
    $nombreArchivo = fopen($nombreArchivo,"w+");
    fclose($nombreArchivo);
    echo "Archivo Creado";
}

$file = fopen($nombreArchivo, "a+");
fwrite($file,"$nombre;$apellido;$direccion".PHP_EOL);
fclose($file);

echo "Guardado completo";

//print_r($_REQUEST);

//echo("El nombre recibido es $nombre y el apellido es $apellido y la direccion es $direccion");
?>