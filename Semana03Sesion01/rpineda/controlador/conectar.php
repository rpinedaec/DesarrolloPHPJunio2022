<?php
$conec = mysqli_connect("localhost", "root","", "instituto");
if(mysqli_connect_errno()){
    printf("Fallo la conexion: %s\n", mysqli_connect_error());
}
?>