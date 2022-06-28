<?php

$nombreArchivo = $_FILES["archivo"]["name"];
$tipoArchivo = $_FILES["archivo"]["type"];
$tmpArchivo = $_FILES["archivo"]["tmp_name"];

if($tipoArchivo == "image/jpeg" || $tipoArchivo == "image/png"){

    $nuevoNombre = time()."-".$nombreArchivo ;
    if(move_uploaded_file($tmpArchivo, "fotos/".$nuevoNombre )){
        echo "Archivo cargado";
        echo  '<img src="fotos\\'.$nuevoNombre.' " alt="">';
    }
    else{
        echo "No se cargo el archivo";
    }

}
else{
    echo "No se pudo cargar, revise que el archivo sea una imagen";
}



?>