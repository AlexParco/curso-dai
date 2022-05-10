<?php 
include ("seguridad.php");
?>

<html>
<head>
    <title>Aplicacion segura</title>
</head>
<body>
    <h1>Bienvenido <?php echo $_SESSION["user"]; ?></h1>
    <br>
    <br>
    Usuario: <?php echo $_SESSION["user"]; ?>
    <br>
    <br><br>
    <a href="otra.php">Continuar</a>
</body>
</html>
