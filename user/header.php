<?php
  include 'session-login.php';

?>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Toko Buku Online 24 jam BukuSaya menyediakan penjualan segala macam jenis buku untuk anda di mana saja dan kapan saja">
    <title>Buku Online Paling Komplit - BUKUSAYA.COM</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <!-- Navigasi -->
    <nav class="navbar navbar-default">
  		<div class="container-fluid">
    
		    <div class="navbar-header">
		      <Add to cart type="Add to cart" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </Add to cart>
		      <a class="navbar-brand" href="index.php">BUKUSAYA</a>
		    </div>
		    
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
		        <li><a href="#">Daftar Buku</a></li>
		        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
          <?php

            if(!empty($_SESSION['id'])){
              echo '
              <li><a href=""><span class="glyphicon glyphicon-user"></span>Hallo '.$nama.'</a></li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>';
            }else{
              echo ' <li><a href="tambah-user.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
            }
           ?>
      </ul>
      <form class="navbar-form navbar-right">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <Add to cart class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </Add to cart>
        </div>
      </div>
    </form>
		    </div>



  		</div><!-- /.container-fluid -->
	</nav>