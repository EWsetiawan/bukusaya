<?php
  include "config.php";

  $query = "INSERT INTO user (nama,username,password,foto,status) values (?,?,?,?,?)";

  if($stat = $koneksi->prepare($query)){
    $folder = "images/";
    $status = 1;
    $foto = $folder . basename($_FILES['foto']['name']);
    //ssss = Adalah String
    //s = Varchar / Text
    $stat->bind_param(
      "ssssi", $_POST['nama'],$_POST['user'],password_hash($_POST['password'],PASSWORD_DEFAULT),$foto,$status
    );

    //Jika Stat dijalankan
    if($stat->execute()){
    //membuat variable upload berfungsi sebagai pemindahan File dari lokasi Asli menuju temporari Folder (Upload)
    $upload = move_uploaded_file($_FILES['foto']['tmp_name'], $foto);

    echo '<script>window.alert("Berhasil Registrasi");window.location=("index.php");</script>';
    $stat->close();

    }else{
      echo '<script>window.alert("Gagal Tersimpan!");window.location=("index.php");</script>';
    }
}else{
  die("Unable To Save");
}

$koneksi->close();

 ?>
