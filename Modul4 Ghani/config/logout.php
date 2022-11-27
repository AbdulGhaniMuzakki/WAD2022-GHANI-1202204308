<?php
    unset($_COOKIE['nama']);
    unset($_COOKIE['email']);
    unset($_COOKIE['password']);
    unset($_COOKIE['no_hp']);
    unset($_COOKIE['colour']);
    setcookie('nama', '', time()-3600, '/');
    setcookie('email', '', time()-3600, '/');
    setcookie('password', '', time()-3600, '/');
    setcookie('no_hp', '', time()-3600, '/');
    setcookie('colour', '', time()-3600, '/');
    
    header('location: ../index.php');
?>
