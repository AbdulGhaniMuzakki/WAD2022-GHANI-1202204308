<?php 

require 'connector-user.php';
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $pass_update = $_POST['pass'];
    $no_hp = $_POST['no_hp'];
    $pass_confirm = $_POST['fix_pass'];
    $colour = $_POST['warna'];

    if(!empty($pass_update) && !empty ($pass_confirm)) {
        if ($pass_update == $pass_confirm) {
            $sql = "UPDATE user_ghani SET nama = '$nama', email = '$email' , password = '$pass_update' , no_hp = '$no_hp' WHERE email = '$email'";
            $result = mysqli_query($connector, $sql);
            
            if ($sql) {
                setcookie('nama', $nama, time() + 3600, '/');
                setcookie('email', $email, time() + 3600, '/');
                setcookie('password', $password, time() + 3600, '/');
                setcookie('no_hp', $no_hp, time() + 3600, '/');
                setcookie('warna', $colour, time() + 3600, '/');

                header("location: ../index.php");
            } else {
                echo "Failed";
            }
        } else {
            echo "Password not match";
        }
    } else {
        $sql = "UPDATE user_ghani SET nama = '$nama', email = '$email', no_hp = '$no_hp' WHERE email = '$email'";
        $result = mysqli_query($connector, $sql);

        if ($sql) {
            setcookie('nama', $nama, time() + 3600, '/');
            setcookie('email', $email, time() + 3600, '/');
            setcookie('no_hp', $no_hp, time() + 3600, '/');
            setcookie('warna', $colour, time() + 3600, '/');

            header("location: ../index.php");
        } else {
            echo "Failed";
        }
        
    }