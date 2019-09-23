<?php
include 'header.php';
include 'config.php';

?>


  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Toko Buku Online 24 jam BukuSaya menyediakan penjualan segala macam jenis buku untuk anda di mana saja dan kapan saja">
    <title>Buku Online Paling Komplit - BUKUSAYA.COM</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="dist/js/jquery.js"></script>
  </head>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img style="overflow:hidden;height: 400px;" src="images/sealions.jpg" width="100%" alt="...">
		      
		    </div>
		    <div class="item">
		      <img style="overflow:hidden;height: 400px" src="images/sealions.jpg" width="100%" alt="...">
		      
		    </div>
		    
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="Add to cart" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="Add to cart" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
	</div>
	<br>
	<br>
	<div class="col-md-12">
		<div class="row">

            <div class="col-md-3">
                <p class="lead">Kategori</p>
                <div class="list-group">
                  <?php
                    $query = "SELECT * FROM kategori";
                    $result = mysqli_query($koneksi,$query);

                    while($row = mysqli_fetch_object($result)){
                        echo '<a href="detail.php?id='.$row->id_kategori.'" class="list-group-item">'.$row->nama_kategori.'</a>';
                    }
                   ?>
                </div>
		</div>

		<div class="col-md-9">
			<?php

				$query = "SELECT * FROM buku";
				$result = mysqli_query($koneksi,$query);

				while($row = mysqli_fetch_object($result))
				{

					
			 ?>
			<div class="col-sm-3">
				<div class="thumbnail">
				    <img src="<?php echo $row->foto; ?>" style="width: 500px;height: 333px;" alt="...">
				    <div class="caption">
				        <h3><?php echo $row->nama_buku; ?></h3>
				        <p><?php echo $row->deskripsi; ?></p>
				        <p><?php echo "Rp".$row->harga; ?></p>
				        <form method="post" action="proses-cart.php">
				        <p>
				        <input type="hidden" name="id_buku" value="<?php echo $row->id_buku ?>"> 
				        <select class="btn btn-default" name="stok">
				        	<option>Pilih Jumlah</option>
				        	<?php for($i=0;$i<=$row->stok;$i++){ ?>
				        	<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				        	<?php } ?>
				        </select>
				        <button class="btn btn-primary" role="Add to cart">Add to cart</button>
				        </p>
				        </form>
				    </div>
				</div>
			</div>
			<?php } ?>
			
		</div>

		


	</div>

			
				    
				   

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>

     <script src="js/jquery.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
<?php
  include 'footer.php';
 ?>