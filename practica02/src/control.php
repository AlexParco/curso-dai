<?php 
session_start();

if ($_POST["usuario"] == "coquito" && $_POST["clave"] == "123"){
    $_SESSION["autentificado"]="1";
    $_SESSION["user"]= $_POST["usuario"];
    $_SESSION["pass"]= $_POST["clave"];
    header ("Location: /aplicacion.php");
} else {
    header ("Location: /index.php?errorusuario");
}

?>
