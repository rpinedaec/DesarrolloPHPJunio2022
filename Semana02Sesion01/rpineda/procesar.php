<?php

$nombre = $_REQUEST["username"];
$password = $_REQUEST["password"];

print_r($_REQUEST);

echo("El nombre recibido es $nombre y el password es $password");

?>