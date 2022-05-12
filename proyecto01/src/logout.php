<?php
session_start();
$_SESSION = array();
session_destroy();
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./styles/style.css" rel="stylesheet" > 
</head>
<body>
    <div class="container d-flex gap-3 justify-content-center align-items-center flex-column" style="height: 100vh">
        <h4 class="fw-bold ">Adios vuelva pronto</h4>
        <a class="btn btn-primary w-25" href="/">Inicio</a>
    </div>
</body>
</html>
