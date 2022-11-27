<?php 

$connector = mysqli_connect ("localhost", "root", "", "wad_modul4_ghani", 3308);

if (!$connector) {
    die("Connector Failed: " . $connector->connect_error);
}
?>