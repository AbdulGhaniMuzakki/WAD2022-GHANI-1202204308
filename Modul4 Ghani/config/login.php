<?php
require 'connector-user.php';
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM user_ghani WHERE email = '$email' AND password = '$password'";  
    $result = mysqli_query($connector, $sql);

    $row = mysqli_fetch_assoc($email);
    if($row) {
        if(isset($_POST['remember_me'])) {
            $remember = $_POST['remember_me'];
            setcookie('remember_me', $remember, time() + 60 * 60 * 24 * 30, '/');
        }
        setcookie('nama', $row['nama'], time() + 60 * 60 * 24 * 30, '/');
        setcookie('email', $row['email'], time() + 60 * 60 * 24 * 30, '/');
        
        header("location: ../index.php");
    } else {
        echo "<script>alert('Wrong Email or Password')</script>";
        echo "<script>location:'../index.php'</script>";
    }
?>