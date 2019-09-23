<?php
  include "config.php";

  if(isset($_GET['id_kategori'])){
      $id_admin = $_GET['id_kategori'];


      $query = "UPDATE kategori SET nama_kategori = ?  WHERE id_kategori = '$id_admin'";

      //Jika Statement Sudah Disiapkan
      if($stat = $koneksi->prepare($query)){
        $stat->bind_param("s" , $_POST['nama_kategori'] 
      );

      if($stat->execute()){
        echo '<script>window.alert("Berhasil Merubah Data");window.location=("kategori.php");</script>';
        $stat->close();
      }else{
        echo '<script>window.alert("Gagal Merubah!");window.location=("kategori.php");</script>';
      }
  }
}else{
    echo '<script>window.location=("../datart.php");</script>';
}




 ?>
