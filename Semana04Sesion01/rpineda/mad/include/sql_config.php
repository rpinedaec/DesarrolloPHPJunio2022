<?php
$GLOBALS ['SQL_TEST'] = "SELECT NOW();";
$GLOBALS['GET_USUARIOS'] = "SELECT id_usuarios, usuario,foto,correo FROM instituto.usuarios;";
$GLOBALS['UPD_USUARIO_CORREO'] = "UPDATE instituto.usuarios set correo = ? where id_usuarios = ?;";
$GLOBALS['LOGIN'] = "SELECT * FROM ishop.usuarios where email = ?";
$GLOBALS['GET_CATEGORIAS'] = "SELECT * FROM ishop.categorias;";
$GLOBALS['GET_PRODUCTOS'] = "select * from productos";
?>