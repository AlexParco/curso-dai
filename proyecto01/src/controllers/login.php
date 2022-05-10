<?php
include'./connection/db.php';
session_start();

if(isset($_POST['register'])){
    $type = 'user';
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $hashPass = password_hash($password, PASSWORD_DEFAULT);
    $SQL = $conn->query("INSERT INTO users(type, email, password) VALUES ('$type','$email', '$hashPass')");

    if(!$SQL){
        echo $conn->error;   
        heading('Location: /');
    }
}

if(isset($_POST['login'])) {
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = trim($conn->real_escape_string($_POST['email']));
        $password = trim($conn->real_escape_string($_POST['password']));

        if(!empty($email)){
            $SQL = $conn->query("SELECT type, email, password FROM users WHERE email='$email'");
            if(mysqli_num_rows($SQL) > 0){
                // get password
                $row = mysqli_fetch_assoc($SQL);
                $conn_pass = $row["password"];
                $verify_pass = password_verify($password, $conn_pass);
                if($verify_pass){
     //               $_SESSION['email'] = $email;
                    $_SESSION['auth'] = '1';
                    if ($row['type'] == 'admin'){
                        header('Location: /adminpage.php');
                    }else{
                        header('Location: /relaciones.php');
                    }
                    exit;
                }else{
                    $error_message = "Contraseña invalida";
                    echo $error_message;
                }
            }else {
                $error_message = "Contraseña o Email incorrecto";
                echo $error_message;
            }
        } 
    }
}

?>
