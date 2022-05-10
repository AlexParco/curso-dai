<?php 
include("seguridad.php");
?>
<html>
    <head>
        <title>Empresa XYZ</title>
    </head>

<body>
    <h1>
        Bienvenido <?php echo $_SESSION["user"]; ?></h1>
    </h1>
    <br><hr> Sistema de la Empresa XYZ <hr><br>
    <a href="salir.php">Salir</a>
</body>
</html>

