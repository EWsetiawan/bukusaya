<?php
  include 'config.php';

  $query = "DELETE FROM buku WHERE id=?";

  if($stat = $koneksi->prepare($query)){
      $stat->bind_param("i", $_GET['id']);

      if($stat->execute()){
          $stat->close();
          echo '<script>window.alert("Berhasil Terhapus");window.location=("book.php");</script>';
      }else{
          echo '<script>window.alert("Gagal Menghapus Data!");window.location=("book.php");</script>';
      }
  }else{
    echo 'Statement Penghapusan Data Gagal Disiapkan';
  }




?>
