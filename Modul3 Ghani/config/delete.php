<?php
require './connector.php';

$id = $_GET['id'];

$sql = "DELETE FROM showroom_ghani_table WHERE id_mobil = $id";

if (mysqli_query($connector, $sql)) {
  header("location: ../pages/List-Ghani.php?message=delete");
} else {
  echo "Failed";
}
