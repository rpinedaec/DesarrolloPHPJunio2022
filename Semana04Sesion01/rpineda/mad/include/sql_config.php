<?php
$GLOBALS ['SQL_TEST'] = "SELECT NOW();";
$GLOBALS['GET_USUARIOS'] = "SELECT id_usuario, nombre,apellidos,usuario FROM sis-ventas.usuarios;";

$GLOBALS['UPD_USUARIO_CORREO'] = "UPDATE sis-ventas.usuarios set usuario = ? where id_usuario = ?;";

$GLOBALS['LOGIN'] = "SELECT * FROM usuarios where usuario = ?";

 $GLOBALS['GET_CATEGORIAS'] = "SELECT * FROM categorias;";

 $GLOBALS['GET_PRODUCTOS'] = "SELECT * FROM productos";

?>