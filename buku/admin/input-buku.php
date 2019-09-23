<?php
  include 'header.php';
  include 'config.php';
 ?>

 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Input Buku
       <small>- Bukusaya.com</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-book"></i> Buku</a></li>
       <li class="active">Input Buku</li>
     </ol>
   </section>

   <!-- Table -->
   <section class="content">

     <form class="" action="simpan-buku.php" method="post" enctype="multipart/form-data">
       <div class="panel panel-default">
         <div class="panel-body">
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="">Kategori</label>
             </div>
             <?php

              $query = "SELECT * FROM kategori";
              $result = mysqli_query($koneksi,$query);

              echo '<select class="" name="kategori">';
              while($row = mysqli_fetch_array($result , MYSQLI_ASSOC)){
                echo '<option value="'.$row['id_kategori'].'">'.$row['nama_kategori'].'</option>';
              }
              echo '</select>';
              ?>
           </div>
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="">Nama Buku</label>
             </div>
             <input type="text" name="nama_buku" value="">
           </div>
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="">Deskripsi</label>
             </div>
             <textarea name="deskripsi"></textarea>
           </div>
           <br>
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="">Harga</label>
             </div>
             <input type="text" name="harga" value="">
           </div>
           <br>
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="">Stok</label>
             </div>
             <input type="text" name="stok" value="">
           </div>
           <br>
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="">Foto</label>
             </div>
             <input type="file" name="foto" value="">
           </div>
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

 <?php
   include 'footer.php';

  ?>
