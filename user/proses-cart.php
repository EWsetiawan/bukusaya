<?php
	
	include 'config.php';
	include 'session-login.php';
	$id_buku = $_POST['id_buku'];
	$stok = $_POST['stok'];
	$query = "INSERT INTO keranjang (id_user,id_buku,jumlah_buku) VALUES (?,?,?)";
	$query2 = "UPDATE buku SET stok = ? WHERE id_buku =$id_buku";
	$query3 = "SELECT * FROM buku WHERE id_buku=$id_buku";
	$result = $koneksi->query($query3);
	$hasil = $result->fetch_assoc();
	echo $id_user;
	if($stat = $koneksi->prepare($query)){
		$kurang_stock = $hasil['stok'] - $stok; 
		$stat->bind_param("iii",$id_user,$_POST['id_buku'],$_POST['stok']);
		if($stat->execute()){
			if($stat2 = $koneksi->prepare($query2)){
				$stat2->bind_param("i",$kurang_stock);

				if($stat2->execute()){
					echo '<script>window.alert("Berhasil Masuk Keranjang!");window.location=("index.php");</script>';
					$stat->close();
				}
			}
		

		}else{
		echo '<script>window.alert("Gagal Input");window.location=("index.php");</script>';
	    $stat->close();
		}

	}else{
		echo '<script>window.alert("Gagal Input");window.location=("index.php");</script>';
    	$stat->close();
	}


?>