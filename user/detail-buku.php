<?php
include 'config.php';
include 'header.php';
if(isset($_GET['id'])){
  $id_admin = $_GET['id'];
  //id = 1;

  $query = "SELECT * FROM buku WHERE id = '$id_admin'";
  //membuat variable yang berfungsi mengambil data dari variable query yang dibuat
  $hasil = $koneksi->query($query);

  $row = $hasil->fetch_assoc();
  //assign the result to certain variable so our html form will be filled up with values

  //Menutup Statement yang ada
  $hasil->free();

  echo '<h4>'.$row['nama_buku'].'</h4>';
  echo '<p>'.$row['deskripsi'].'</p>';

}else{
  echo '<script>window.location("datart.php");</script>';
}
?>


