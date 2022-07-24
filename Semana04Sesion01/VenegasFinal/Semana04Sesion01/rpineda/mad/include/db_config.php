<?php
require_once 'logger/Logger.php';
Logger::configure('config.xml');
function db_get_connection_default() {
	try {
		$db_user = "root";
		$db_password = "";
		$db_dbName = "sis-ventas";
		$db_server = "localhost";
		$db_connection = new stdClass ();
		$db_connection->user = $db_user;
		$db_connection->password = $db_password;
		$db_connection->dbName = $db_dbName;
		$db_connection->server = $db_server;
		return new PDO ( "mysql:host=$db_server;dbname=$db_dbName", $db_user, $db_password, array (
				PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' 
		) );
	} catch ( PDOException $e ) {
		throw new Exception ( ERROR_EN_EL_PROCEDIMIENTO );
	}
}
function db_test($param = null) {
	global $SQL_TEST;
	$db_connection = db_get_connection_default ();
	$query = $SQL_TEST;
	$stmt = $db_connection->prepare ( $query );
	if ($stmt->execute ()) {
		while ( $row = $stmt->fetchAll ( PDO::FETCH_ASSOC ) ) {
			return $row;
		}
	} else {
		throw new Exception ( ERROR_EN_EL_PROCEDIMIENTO );
	}
}

function db_get_usuarios(){
    global $GET_USUARIOS;
	$db_connection = db_get_connection_default ();
	$query = $GET_USUARIOS;
	$stmt = $db_connection->prepare ( $query );
	if ($stmt->execute ()) {
		while ( $row = $stmt->fetchAll ( PDO::FETCH_ASSOC ) ) {
			return $row;
		}
	} else {
		throw new Exception ( ERROR_EN_EL_PROCEDIMIENTO );
	}
}

function db_upd_usuario_correo($id_usuarios, $correo){
    global $UPD_USUARIO_CORREO;
	$db_connection = db_get_connection_default ();
	$query = $UPD_USUARIO_CORREO;
	$stmt = $db_connection->prepare ( $query );
	$db_arg = array (
			$correo,
            $id_usuarios,
	);
    $log = Logger::getLogger(__CLASS__);
    $log->debug($db_arg);
	if ($stmt->execute ( $db_arg )) {
        $rowAffected =  $stmt->rowCount();
        if($rowAffected>0){
		    return true;
        }
        else{
            return false;
        }
	} else {
		throw new Exception ( ERROR_EN_EL_PROCEDIMIENTO );
	}
}

function db_login($password, $correo){
    global $LOGIN;
	$db_connection = db_get_connection_default ();
	$query = $LOGIN;
	$stmt = $db_connection->prepare ( $query );
	$db_arg = array (
			$correo
	);
	if ($stmt->execute($db_arg)) {
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $resultado;
	} else {
		throw new Exception ( ERROR_EN_EL_PROCEDIMIENTO );
	}
}

function db_get_categorias(){
    global $GET_CATEGORIAS;
	$db_connection = db_get_connection_default ();
	$query = $GET_CATEGORIAS;
	$stmt = $db_connection->prepare ( $query );
	if ($stmt->execute()) {
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $resultado;
	} else {
		throw new Exception ( ERROR_EN_EL_PROCEDIMIENTO );
	}
}


function db_get_productos(){
    global $GET_PRODUCTOS;
	$db_connection = db_get_connection_default ();
	$query = $GET_PRODUCTOS;
	$stmt = $db_connection->prepare ( $query );
	if ($stmt->execute()) {
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $resultado;
	} else {
		throw new Exception ( ERROR_EN_EL_PROCEDIMIENTO );
	}
}
?>