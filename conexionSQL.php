<?php
date_default_timezone_set("America/Argentina/Mendoza");
$fecha =  date("Y/m/d");

$mysqli= new mysqli("localhost", "root","","noticiascn");

if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}
?>
