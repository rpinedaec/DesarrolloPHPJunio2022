<?php

function initInclude(){
    require_once 'include/ws_function_def.php';
    require_once 'include/fun_config.php';
    require_once 'include/db_config.php';
    require_once 'include/sql_config.php';
    require_once 'include/logger/Logger.php';
}

function initConfig(){
    initInclude();
    Logger::configure('config.xml');
    $log = Logger::getLogger('myLogger');
    global $ws_funciones_def;
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    $response = new stdClass();
    $parametros="";
    $fun="";
    if (!isset($_POST["PARAM"])) {
        $response->Error = "Petición no encontrada";
    } else {
        $parametros = json_decode($_POST["PARAM"]);
        // echo json_encode($parametros);
        try {
            $fun = $parametros->funcion;
            $args = $parametros->args;
        } catch (Exception $e) {
            $response->Error = $e->getMessage();
            echo json_encode($response);
            return;
        }
        $response->funcion = $fun; 
        try {
            switch ($fun) {
                case $ws_funciones_def["FUN_ID_DEF"][0]: // HEARBEAT
                    $response->answer = hearbeat($args);
                    break;
                case $ws_funciones_def["FUN_ID_DEF"][1]: // LOGIN
                    $response->answer = fun_login($args);
                    // echo json_encode("ejecutando hasta este punto ");
                    break;
                case $ws_funciones_def["FUN_ID_DEF"][2]: // LOGOUT
                    $response->answer = fun_logout($args);
                    break;
                case $ws_funciones_def["FUN_ID_DEF"][3]: // GET_CATEGORIAS
                    $response->answer = fun_get_categorias($args);
                    break;
                case $ws_funciones_def["FUN_ID_DEF"][4]: // GET_PRODUCTOS
                    $response->answer = fun_get_productos($args);
                    break;
                default:
                    throw new Exception("Funcion: $fun no encontrada", 1);
                    break;
                 }
            } catch (Exception $e) {
                $response->error = $e->getMessage();
                error_log(json_encode($response));
            }
        }
        echo json_encode($response);
}

initConfig();

?>