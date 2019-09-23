<?php
	
	include 'config.php';
	$id_keranjang = $_GET['id_keranjang'];
	$id_buku = $_GET['id_buku'];

	$query1 = "SELECT * FROM keranjang WHERE id_keranjang='$id_keranjang'";
	$query2 = "UPDATE buku SET stok = ? WHERE id_buku='$id_buku'";
	$query3 = "DELETE FROM keranjang WHERE id_keranjang='$id_keranjang'";
	$query4 = "SELECT * FROM buku WHERE id_buku='$id_buku'";
	$hasil = mysqli_query($koneksi, $query1);
	$hasil2 = mysqli_query($koneksi,$query4);
	if($stat = $koneksi->prepare($query2)){	
		$stok = 0;
		$total = 0;
		while($result = mysqli_fetch_object($hasil2)){
			while($result2 = mysqli_fetch_object($hasil)){
				$jumlah_stok = $result->stok;
				$cart = $result2->jumlah_buku;
				$stok = $cart + $jumlah_stok;
				$total += $stok;
			}
		}
		echo $total;
		$stat->bind_param("i", $stok);
		if($stat->execute()){
			if($stat2 = $koneksi->prepare($query3)){
				if($stat2->execute()){
					echo '<script>window.alert("Barang Berhasil di Kembalikan");window.location=("index.php");</script>';
	    			$stat->close();
				}
			}
		}
	}


?>