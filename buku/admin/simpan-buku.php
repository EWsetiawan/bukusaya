<?php
  include "config.php";

  $query = "INSERT INTO buku(id_kategori,nama_buku,deskripsi,harga,stok,foto) values (?,?,?,?,?,?)";

  if($stat = $koneksi->prepare($query)){
    $folder = "images/";

    $foto = $folder . basename($_FILES['foto']['name']);
    //ssss = Adalah String
    //s = Varchar / Text
    $stat->bind_param(
    "issiis", $_POST['kategori'],$_POST['nama_buku'], $_POST['deskripsi'],$_POST['harga'],$_POST['stok'],$foto
    );

    //Jika Stat dijalankan
    if($stat->execute()){
    //membuat variable upload berfungsi sebagai pemindahan File dari lokasi Asli menuju temporari Folder (Upload)
    $upload = move_uploaded_file($_FILES['foto']['tmp_name'], $foto);

    echo '<script>window.alert("Berhasil Menyimpan Buku");window.location=("book.php");</script>';
    $stat->close();
    }else{
      echo '<script>window.alert("Gagal Tersimpan!");window.location=("book.php");</script>';
    }
}else{
  die("Unable To Save");
}

$koneksi->close();

 ?>
