<?php

$GLOBALS["ws_funciones_def"] = array(
    "FUN_ID_DEF" => array(
        "HEARBEAT", //0
        "LOGIN", //1
        "LOGOUT", //2
        "GET_CATEGORIAS",//3
        "GET_PRODUCTOS", //4

    ),
    "FUN_NAME_DEF" => array(
        "Latido del Servidor",
        "Login",
        "Logout",
        "Trae todas las categorias de la base",
        "Trae los Productos de la tienda",
    ),
    "FUN_EXAMPLE_DEF" => array(
        "{}",
        '{"usuario":"venegas", "password": "12345"}',
        '{}',
        '{}',
        '{}'
    )
);
define('ERROR_PARAMETROS_INSUFICIENTES', 'Parámetros Insuficientes');
define('ERROR_ARGUMENTOS_INSUFICIENTES', 'Argumentos Insuficientes');
define('ERROR_EN_EL_PROCEDIMIENTO', '-1;Error en el Procedimiento');
define('ERROR_NO_EXISTE_FUNCION', 'No existe la funcion solicitada');
define('ERROR_NO_EXISTE_USUARIO', 'No existe usuario o el password es incorrecto');
?>