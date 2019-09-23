<?php
include'header.php';
?>
	<head>
	   <link href="css/bootstrap.min.css" rel="stylesheet">
	   <script src="dist/js/jquery.js"></script>
	</head>

	<div class="container">
		<h1>Bukti pembayara</h1>
		  <section class="content">

     <form class="" action="proses-checkout.php" method="post" enctype="multipart/form-data">
       <div class="panel panel-default">
         <div class="panel-body">
         
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="nama">Tgl pembayaran</label>
             </div>
             <input type="text" name="nama" value="">
           </div><br>
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="nama">username</label>
             </div>
             <input type="date" name="username" value="">
           </div>
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="password">Bukti pembayaran</label>
             </div>
             <input type="file" name="foto" value="">
           </div>
           <br>
           <br>
           <div class="col-md-12">
             <div class="col-md-2">
               <button type="submit" class="btn btn-primary" name="button">Simpan</button>
             </div>

           </div>

           </div>

         </div>
       </div>

     </form>


   </section>
   <!-- /.content -->

 </div>
	</div>