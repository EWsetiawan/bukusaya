<?php
  include "config.php";

  if(isset($_GET['id'])){
      $id_admin = $_GET['id'];


      $query = "UPDATE buku SET id_kategori=? , nama_buku = ? , deskripsi = ? , harga = ? , stok = ? WHERE id = '$id_admin'";

      //Jika Statement Sudah Disiapkan
      if($stat = $koneksi->prepare($query)){
        $stat->bind_param("issii" , $_POST['kategori'] , $_POST['nama_buku'] ,  $_POST['deskripsi'] ,  $_POST['harga'] ,  $_POST['stok']
      );

      if($stat->execute()){
        echo '<script>window.alert("Berhasil Merubah Data");window.location=("book.php");</script>';
        $stat->close();
      }else{
        echo '<script>window.alert("Gagal Merubah!");window.location=("book.php");</script>';
      }
  }
}else{
    echo '<script>window.location=("../datart.php");</script>';
}




 ?>
