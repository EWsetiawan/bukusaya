<?php
  include 'config.php';

  $query = "DELETE FROM kategori WHERE id_kategori=?";

  if($stat = $koneksi->prepare($query)){
      $stat->bind_param("i", $_GET['id']);

      if($stat->execute()){
          $stat->close();
          echo '<script>window.alert("Berhasil Terhapus");window.location=("kategori.php");</script>';
      }else{
          echo '<script>window.alert("Gagal Menghapus Data!");window.location=("kategori.php");</script>';
      }
  }else{
    echo 'Statement Penghapusan Data Gagal Disiapkan';
  }




?>
