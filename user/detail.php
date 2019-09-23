<?php
    include 'config.php';
    include 'header.php';

    if(isset($_GET['id'])){
      $id = $_GET['id'];


      $query = "SELECT * FROM buku WHERE id_buku = '$id'";
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
<div class="col-md-9">
 <div class="row">

     <?php

     $query = "SELECT * FROM buku WHERE id_kategori = '$id'";
     $result = mysqli_query($koneksi,$query);

     $row2 = $result->num_rows;

     if($row2 > 0){
     while($hasil = mysqli_fetch_object($result))
     {
     ?>

     <div class="col-sm-4 col-lg-4 col-md-4">
         <div class="thumbnail">


               <img src="<?php echo $hasil->foto; ?>" style="width:320px;height:150px;" alt="">



             <div class="caption">
                 <h4 class="pull-right"></h4>
                 <h4><a href="#"><?php echo $hasil->nama_buku; ?></a>
                 </h4>
                 <p><a target="_blank" href=""><?php echo $hasil->deskripsi; ?></a>.</p>
             </div>
             <div class="ratings">
                 <p class="pull-right"></p>
                 <p>
                     <a href="#" type="button" class="btn btn-primary" name="button">Beli</a>
                 </p>
             </div>
         </div>
     </div>

     <?php }
   }else{
     echo '<h1 style="color:red">Item Barang Kosong</h1>';
   } ?>
     </div>

</div>





 </div>

 </div>

 </div>

 </div>
 <!-- /.container -->

 <div class="container">

 <hr>










</div>

 <?php
   include 'footer.php';
  ?>
