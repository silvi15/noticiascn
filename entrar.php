<?php
session_start();
if ($_SESSION['rol'] == "A") {
    $_SESSION['validar'] = 'A';
    header("Location: menuAdmin.php");
} else if ($_SESSION['rol'] == "E") {
    $_SESSION['validar'] = 'E';
    header("Location: menuOpciones.php");
}
?>
