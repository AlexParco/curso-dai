<?php
session_start();

if (!isset($_SESSION['user'])){
    header('Location: /');
    exit();
}
?>
<html>
<head>
    <link rel="stylesheet" href="./styles/style.css">
    <!-- CSS only
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     -->
</head>
<body>
    <div>
        hola usuario
        <a href="logout.php">Cerrar Session</a>
    </div>
</body>
