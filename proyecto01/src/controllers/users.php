<?php
include'./connection/db.php';

if(isset($_POST['save'])){
    $type = $conn->real_escape_string($_POST['type']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $hashPass = password_hash($password, PASSWORD_DEFAULT);
    $SQL = $conn->query("INSERT INTO users(type, email, password) VALUES ('$type','$email', '$hashPass')");

    if(!$SQL){
        echo $conn->error;   
        header('Location: /logout.php');
    }else{
        header('Location: /adminpage');
    }
}

if(isset($_GET['del'])){
    $SQL = $conn->query("DELETE FROM users WHERE id=".$_GET['del']);
}

if(isset($_GET['edit'])){
    $SQL = $conn->query("SELECT * FROM users WHERE id=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}

if(isset($_POST['update'])){
    $SQL = $conn->query("UPDATE users SET type='".$_POST['type']."', email='".$_POST['email']."' WHERE id=".$_GET['edit']);
}
?>
