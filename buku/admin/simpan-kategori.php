<?php
  include "config.php";

  $query = "INSERT INTO kategori (id_kategori,nama_kategori) values (?,?)";

  if($stat = $koneksi->prepare($query)){
   
    $stat->bind_param(
      "is", $_POST['kategori'],$_POST['nama_kategori']
    );

    //Jika Stat dijalankan
    if($stat->execute()){
    //membuat variable upload berfungsi sebagai pemindahan File dari lokasi Asli menuju temporari Folder (Upload)

    echo '<script>window.alert("Berhasil Menyimpan Buku");window.location=("kategori.php");</script>';
    $stat->close();
  }else{
    echo '<script>window.alert("Gagal Tersimpan!");window.location=("kategori.php");</script>';
  }
}else{
  die("Unable To Save");
}

$con->close();

 ?>
