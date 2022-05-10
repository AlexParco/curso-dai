<?php
include_once 'db.php';

if(isset($_POST['save'])){
    $fn = $sqlcon->real_escape_string($_POST['fn']);
    $ln = $sqlcon->real_escape_string($_POST['ln']);
    $SQL = $sqlcon->query("INSERT INTO data(fn, ln) VALUES ('$fn','$ln')");

    if(!$SQL){
        echo $sqlcon->error;   
    }
}

if(isset($_GET['del'])){
    $SQL = $sqlcon->query("DELETE FROM data WHERE id=".$_GET['del']);
    header("Location:index.php");
}

if(isset($_GET['edit'])){
    $SQL = $sqlcon->query("SELECT * FROM data WHERE id=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}

if(isset($_POST['update'])){
    $SQL = $sqlcon->query("UPDATE data SET fn='".$_POST['fn']."', ln='".$_POST['ln']."' WHERE id=".$_GET['edit']);
    header("Location:index.php");
}

?>
