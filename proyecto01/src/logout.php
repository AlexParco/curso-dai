<?php
session_start();
$_SESSION = array();
session_destroy();
?>

<html>
<head>
    <title>Fin de la sesion</title>
</head>
<body>
Adios vuelva pronto
<a href="/">Inicio</a>
</body>
</html>
