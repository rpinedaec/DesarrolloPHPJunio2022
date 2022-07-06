<?php
$email = $_REQUEST["email"];

$nombreArchivo = "clientes.txt";

if(!file_exists($nombreArchivo)){
    $nombreArchivo = fopen($nombreArchivo,"w+");
    fclose($nombreArchivo);
    echo "Archivo Creado";
}

$file = fopen($nombreArchivo, "a+");
fwrite($file,"$email".PHP_EOL);
fclose($file);

echo "Guardado completo";

//print_r($_REQUEST);

//echo("El nombre recibido es $nombre y el apellido es $apellido y la direccion es $direccion");
?>