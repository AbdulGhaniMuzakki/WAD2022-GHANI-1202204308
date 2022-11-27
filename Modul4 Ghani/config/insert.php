<?php
require './connector.php';

$namamobil = $_POST['nama'];
$pemilik = $_POST['pemilik'];
$merk = $_POST['merk'];
$tanggalbeli = $_POST['tanggalbeli'];
$desc = $_POST['desc'];
$status = $_POST['status'];
$file = $_FILES['file']['nama'];
$gambar = $_FILES['gambar']['tmp_name'];

$target = "../asset/images/";

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
  $sql = "INSERT INTO showroom_ghani_table (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$namamobil', '$pemilik', '$merk', '$tanggalbeli', '$desc', '$gambar', '$status')";
  $result = mysqli_query($connector, $sql);
  if ($result) {
    header("location: ../index.php?page=My_Car");
  } else {
    echo "Failed";
  }
} else {
  echo "Failed";
}
