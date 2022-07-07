<?php

include("conectar.php");

$usuario = $_REQUEST["usuario"];
$clave = $_REQUEST["clave"];

$sql = "Select * from usuarios WHERE usuario = ?;";

$sentencia = mysqli_prepare($conec, $sql);
mysqli_stmt_bind_param($sentencia,"s",$usuario);

mysqli_stmt_execute($sentencia);

$resultados = mysqli_stmt_get_result($sentencia);

if(mysqli_num_rows($resultados) > 0){

    $registro = mysqli_fetch_assoc($resultados);
    if($registro["clave"]==$clave){
        session_start();
        $_SESSION["usuarioActivo"] = $usuario;
        $resultado = ["ok"=>true];
        echo json_encode($resultado);
    }
    else{
        $resultado = ["error"=>"Clave Erronea"];
        echo json_encode($resultado);

    }
}
else{
    $resultado = ["error"=>"Usuario No Existe"];
        echo json_encode($resultado);
}

?>