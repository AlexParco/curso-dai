<?php
// debera cambair las variables para la conexion en su phpmyadmin o base de datos
$conn = new mysqli('db', 'root', 'root', 'proyecto'); 

if ($conn -> connect_errno){
    die("Connection error: ". $conn->connect_errno);
}

?>
