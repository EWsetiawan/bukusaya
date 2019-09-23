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
       <li><a href="#"><i class="fa fa-book"></i> Kategori</a></li>
       <li class="active">Daftar Kategori</li>
     </ol>
   </section>

   <!-- Table -->
   <section class="content">

     <a href="input_kategori.php" style="float:right;" class="btn btn-primary">Tambah Data</a>
     <br>
     <br>
     <table id="myTable" class="table table-striped">
       <thead>
         <tr>
           <th>No ID</th>
           <th>Nama kategori</th>
           <th>Hapus</th>
           <th>Edit</th>
         </tr>
       </thead>

       <tbody>
         <?php
          $query = "SELECT * FROM kategori";
          $extract = mysqli_query($koneksi,$query);
          $no = 1;
          while($row = mysqli_fetch_array($extract , MYSQLI_ASSOC)){
            echo '<tr>
              <th>'.$no++.'</th>
              <th>'.$row['nama_kategori'].'</th>
              <th><a class="btn btn-danger" href="hapus-kategori.php?id_kategori='.$row['id_kategori'].'">x<a/></th>
              <th><a class="btn btn-warning" href="edit-kategori.php?id_kategori='.$row['id_kategori'].'"><i class="fa fa-gear"></i><a/></th>
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
