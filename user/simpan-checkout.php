<?php
include'config.php';

$query ="INSERT INTO checkout (nama,alamat,kecamatan,kota,kodepos,nohp) values (?,?,?,?,?,?)";

  if($stat = $koneksi->prepare($query)){
   
    $stat->bind_param(
      "ssssii", $_POST['nama'],$_POST['alamat'],$_POST['kecamatan'],$_POST['kota'],$_POST['kodepos'],$_POST['no']);

    if($stat->execute()){

    echo '<script>window.alert("Berhasil Menyimpan Buku");window.location=("checkout.php");</script>';
    $stat->close();
  }else{
    echo '<script>window.alert("Gagal Tersimpan!");window.location=("checkout.php");</script>';
  }
}else{
  die("Unable To Save");
}

$con->close();

 ?>

?>
