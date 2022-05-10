<?php
$conn = new mysqli('db', 'root', 'root', 'semana6'); 

if ($conn -> connect_errno){
    die("Connection error: ". $conn->connect_errno);
}

?>
