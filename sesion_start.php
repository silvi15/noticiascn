<?php
session_start();
#Conectamos con MySQL
include("conexionSQL.php");

//$email = $_POST['email']; echo "$email";
//$clave = $_POST['clave']; echo "$clave";

$res =$mysqli->query("SELECT id, rol, email FROM usuario WHERE (email = '$_POST[email]' && clave = '$_POST[clave]')");
if ($row = $res ->fetch_array()) {
    $_SESSION['id'] = $row['id'];
    $_SESSION['rol'] = $row['rol'];
    $_SESSION['email'] = $row['email'];
    header("Location: entrar.php");
    die();
} else {
    header("Location: index.php?errorUsuarioIncorrectoClaveIncorrecta");
    echo "error en usuario o clave incorrecta";
    die();
}

?>
