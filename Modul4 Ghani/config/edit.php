<?php
require './connector.php';

if (isset($_POST['edit'])) {
  $id = $_POST['id'];
  $namamobil = $_POST['nama'];
  $pemilik = $_POST['pemilik'];
  $merk = $_POST['merk'];
  $tanggalbeli = $_POST['tanggalbeli'];
  $desc = $_POST['desc'];
  $status = $_POST['status'];
  $file = $_FILES['file']['nama'];
  $gambar = $_FILES['gambar']['tmp_name'];

  if ($gambar) {
    move_uploaded_file($gambar,"../asset/images/".$file);
    $query = "UPDATE showroom_ghani_table SET nama_mobil = '$namamobil', pemilik_mobil = '$pemilik', merk_mobil = '$merk', tanggal_beli = '$tanggalbeli', deskripsi = '$desc', foto_mobil = '$file', status_pembayaran = '$status' WHERE id_mobil = $id";
    $sql = mysqli_query($conn, $query);
  } else {
      $query = "UPDATE showroom_ghani_table SET nama_mobil = '$namamobil', pemilik_mobil = '$pemilik', merk_mobil = '$merk', tanggal_beli = '$tanggalbeli', deskripsi = '$desc', status_pembayaran = '$status' WHERE id_mobil = $id";
      $sql = mysqli_query($conn, $query);
  }

  header("location: ../index.php");
}