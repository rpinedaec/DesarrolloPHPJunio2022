<?php

$nombreArchivo = $_FILES["archivo"]["name"];
$tipoArchivo = $_FILES["archivo"]["type"];
$tmpArchivo = $_FILES["archivo"]["tmp_name"];

//Validaciones
if($tipoArchivo == "image/jpeg" || $tipoArchivo == "image/png" ){
    //Procesar el archivo
    $nuevoNombre = time()."-".$nombreArchivo;
    if(move_uploaded_file($tmpArchivo, "fotos\\".$nuevoNombre )){
        echo "el archivo se guaro existosamente";
    }
    else{
        echo "No se pudo guardar el archivo";
    }
}
else{
    echo "El archivo enviado no es una imagen"; 
}

?>