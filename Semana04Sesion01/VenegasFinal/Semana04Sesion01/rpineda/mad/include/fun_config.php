<?php
require_once 'logger/Logger.php';
Logger::configure('config.xml');

function hearbeat($args)
{
    $resp = new stdClass();
    $resp->db = db_test();
    $resp->server = GetServerStatus('http://localhost', 80);
    return $resp;
}
function GetServerStatus($site, $port)
{
    $status = array(
        "OFFLINE",
        "ONLINE",
    );
    $fp = @fsockopen($site, $port, $errno, $errstr, 2);
    if (!$fp) {
        return $status[1];
    } else {
        return $status[0];
    }
}

function fun_login($args){
    if (!isset($args->usuario) || !isset($args->password)) {
        throw new Exception(ERROR_PARAMETROS_INSUFICIENTES);
    }
    $log = Logger::getLogger(__CLASS__);
    $password = $args->password;
    $correo = $args->usuario;
    $resp = db_login($password, $correo);
    $pass = $resp[0]["password"];
    if($pass==$password){
        unset($resp[0]['password']);
        session_start();
        $_SESSION["usuario"] = $resp[0];
        return $resp[0];

    }
    else{
        return false;
    }
    return $resp;
}

function fun_logout($args){
    try {
        session_start();
        session_destroy();
        return true;
    } catch (Exception $e) {
        throw new Exception(ERROR_PARAMETROS_INSUFICIENTES);
    }
}
function fun_get_categorias($args){
    $resp = db_get_categorias();
    return $resp;
}
function fun_get_productos($args){
    $resp = db_get_productos();
    return $resp;
}



function fun_upd_usuarios_correo($args){
    if (!isset($args->id_usuarios) || !isset($args->correo)) {
        throw new Exception(ERROR_PARAMETROS_INSUFICIENTES);
    }
    $id_usuarios = $args->id_usuarios;
    $correo = $args->correo;
    $resp = new stdClass();
    if (db_upd_usuario_correo($id_usuarios, $correo)) {
        $resp->respuesta = true;
    }
    else{
        throw new Exception(ERROR_EN_EL_PROCEDIMIENTO);
    }
    return $resp;
}

?>