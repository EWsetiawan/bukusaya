<?php
  include 'header.php';
  include 'config.php';
 ?>

 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Dashboard
       <small>Control panel</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-book"></i> Buku</a></li>
       <li class="active">Daftar Buku</li>
     </ol>
   </section>

   <!-- Table -->
   <section class="content">

     <a href="input-buku.php" style="float:right;" class="btn btn-primary">Tambah Data</a>
     <br>
     <br>
     <table id="myTable" class="table table-striped">
       <thead>
         <tr>
           <th>No</th>
           <th>Nama Buku</th>
           <th>Harga</th>
           <th>Stock</th>
           <th>Hapus</th>
           <th>Edit</th>
         </tr>
       </thead>

       <tbody>
         <?php
          $query = "SELECT * FROM buku";
          $extract = mysqli_query($koneksi,$query);
          $no = 1;
          while($row = mysqli_fetch_array($extract , MYSQLI_ASSOC)){
            echo '<tr>
              <th>'.$no++.'</th>
              <th>'.$row['nama_buku'].'</th>
              <th>'.$row['harga'].'</th>
              <th>'.$row['stok'].'</th>
              <th><a class="btn btn-danger" href="hapus-buku.php?id='.$row['id_buku'].'">x<a/></th>
              <th><a class="btn btn-warning" href="edit-buku.php?id='.$row['id_buku'].'"><i class="fa fa-gear"></i><a/></th>
            </tr>';
          }

         ?>
       </tbody>

     </table>


   </section>
   <!-- /.content -->

 </div>

 <?php
   include 'footer.php';

  ?>
