<?php
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

function fun_get_usuarios($args){
    $resp = db_get_usuarios();
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