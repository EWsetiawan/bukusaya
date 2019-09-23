<?php

session_start();
include 'config.php';

if(isset($_SESSION['nama'])){

  $id = $_SESSION['id'];
  $query = "SELECT * FROM user WHERE id_user='$id'";
  $result = $koneksi->query($query);
  $print = $result->fetch_assoc();
  extract($print);
}

?>
