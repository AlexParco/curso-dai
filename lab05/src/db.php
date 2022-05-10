<?php
    define('_HOST_NAME', 'db');
    define('_DATABASE_NAME', 'semana6');
    define('_DATABASE_USER_NAME', 'root');
    define('_DATABASE_PASSWORD', 'root');

    $sqlcon = new mysqli(_HOST_NAME, _DATABASE_USER_NAME, _DATABASE_PASSWORD, _DATABASE_NAME);

    if($sqlcon->connect_error){
        die("ERROR test: -> " .$sqlcon->connect_error);
    }

?>
