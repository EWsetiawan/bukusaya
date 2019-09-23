<?php
	include'header.php';
	include'config.php';
	if(!isset($_SESSION['nama'])){
    echo '<script>window.alert("Login Terlebih Dahulu");window.location=("login.php");</script>';
  }
	if (!isset($_SESSION)) {
        session_start();
    }
	if(isset($_GET['id_user'])){
      $id = $_GET['id_user'];


      $query = "SELECT * FROM user WHERE id_user = '$id'";
      //membuat variable yang berfungsi mengambil data dari variable query yang dibuat
      $hasil = $koneksi->query($query);

      $row = $hasil->fetch_assoc();
      //assign the result to certain variable so our html form will be filled up with values

      //Menutup Statement yang ada
      $hasil->free();

    }else{
      echo '<script>window.location("datart.php");</script>';
    }
?>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="dist/js/jquery.js"></script>
</head>

	<div class="col-sm-7">
		<div class="title"><h3>Detail Keranjang Belanja</h3></div>

			<table class="table table-hover table-condensed">
				<tr>
					<th align="center">No Pembelian</th>
                    <th align="center">Kode Barang</th>
					<th align="center">Nama Barang</th>
					<th align="center">Jumlah</th>
					<th align="center">Harga Satuan</th>
					<th align="center">Sub Total</th>
					<th align="center">Kembali</th>
				</tr>

				<?php
					$jumlah = 0;
					$total = 0;
					$query = "SELECT * FROM keranjang where id_user=$id_user";
					$result = mysqli_query($koneksi, $query);
					$no = 1;
					foreach($result as $barang){
					$id_buku = $barang['id_buku'];
				 ?>
				<tr>

					<td align="center"><?php echo $no++ ?></td>
					<td align="center"><?php echo $barang['id_buku']; ?></td>
					<?php
					$query2 = "SELECT * FROM buku WHERE id_buku='$id_buku'";
					$result2 = mysqli_query($koneksi,$query2);
					
					foreach($result2 as $buku){
					$jumlah = $barang['jumlah_buku'];
					$harga = $buku['harga'];
					$subtotal = $jumlah * $harga;
					$jumlah = $subtotal + 0;
					$total += $jumlah;
					?>

					<td align="center"><?php echo $buku['nama_buku']; ?></td>
					<td align="center"><?php echo $barang['jumlah_buku']; ?></td>
					<td align="center"><?php echo $buku['harga']; ?></td>
					<td align="center"><?php echo $subtotal; ?></td>
					<td align="center"><a href="proses-batal.php?id_keranjang=<?php echo $barang['id_keranjang'] ?>&id_buku=<?php echo $buku['id_buku']?>" class="btn btn-danger">Batal</a></td>
					<?php } ?>
				</tr>
					<?php } ?>
			</table>
			<h4>Total : <?php echo $total; ?> </h4>	
			<div class="col-sm-7">
			<div class="col-xs-6">
 			 <a href="checkout.php" class="btn btn-primary" role="button">Checkout</a>
 			 </div></div>
	</div>