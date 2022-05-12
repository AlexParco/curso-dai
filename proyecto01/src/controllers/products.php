<?php
include'./connection/db.php';

if(isset($_POST['agregar'])){
    $pais = $conn->real_escape_string($_POST['pais']);
    $producto = $conn->real_escape_string($_POST['producto']);
    $cantidad = $conn->real_escape_string($_POST['cantidad']);
    $tipo = $conn->real_escape_string($_POST['tipo']);

    $SQL = $conn->query("INSERT INTO products(pais, producto, cantidad, tipo) VALUES ('$pais','$producto', '$cantidad', '$tipo')");

    if(!$SQL){
        header('Location: /relaciones.php');
    }else{
        header('Location: /relaciones.php');
    }
}

if(isset($_GET['del'])){
    $SQL = $conn->query("DELETE FROM products WHERE id=".$_GET['del']);
}

if(isset($_GET['edit'])){
    $SQL = $conn->query("SELECT * FROM products WHERE id=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}

if(isset($_POST['update'])){
    $pais = $conn->real_escape_string($_POST['pais']);
    $producto = $conn->real_escape_string($_POST['producto']);
    $cantidad = $conn->real_escape_string($_POST['cantidad']);
    $tipo = $conn->real_escape_string($_POST['tipo']);

    $SQL = $conn->query("UPDATE products SET pais='$pais', producto='$producto', cantidad='$cantidad', tipo='$tipo' WHERE id=".$_GET['edit']);
}
?>
