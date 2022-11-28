<?php
require './connector.php';
$id = $_GET['id'];
$image = mysqli_query($connector, "SELECT foto_mobil FROM showroom_ghani_table WHERE id_mobil = $id");
$row =  mysqli_fetch_assoc($image);

unlink("../asset/".$row['foto_mobil']);

$sql = "DELETE FROM showroom_ghani_table WHERE id_mobil = $id";
$result = mysqli_query($connector, $sql);

if (mysqli_query($connector, $sql)) {
  header("location: ../index.php?page=My_Car");
} else {
  echo "Failed";
}
