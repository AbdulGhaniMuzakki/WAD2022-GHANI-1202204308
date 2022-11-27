<?php

require 'connector-user.php';
   $email = $_POST['email'];
   $nama = $_POST['nama'];
   $password = $_POST['pass'];
   $no_hp = $_POST['no_hp'];
   $pass_confirm = $_POST['fix_pass'];

   if ($password == $pass_confirm) {
       $sql = "INSERT INTO user_ghani(nama, email, password, no_hp) VALUES ('$nama', '$email', '$password', '$no_hp')";
       $result = mysqli_query($connector, $sql);

    if ($sql) {
       setcookie('nama', $nama, time() + 60 * 60 * 24 * 30, '/');
       setcookie('email', $email, time() + 60 * 60 * 24 * 30, '/');
       setcookie('password', $password, time() + 60 * 60 * 24 * 30, '/');
       setcookie('no_hp', $no_hp, time() + 60 * 60 * 24 * 30, '/');       

       header('location: ../index.php?page=login');
    }else {
        echo 'Failed';
    }
} else {
    echo 'Password not match';
}