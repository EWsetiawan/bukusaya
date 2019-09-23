<?php
  include 'header.php';
  include 'config.php';

  //Memerika Id User yang telah Di Click/Lempar
//Jika Ada Perintah Dijalankan
if(isset($_GET['id_kategori'])){
  $id_admin = $_GET['id_kategori'];


  $query = "SELECT * FROM kategori WHERE id_kategori = '$id_admin'";
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

 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Input kategori
       <small>- Bukusaya.com</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li class="active">Input Kategori</li>
     </ol>
   </section>

   <!-- Table -->
   <section class="content">

     <form class="" action="update-kategori.php?id_kategori=<?php echo $row['id_kategori']; ?>" method="post">
       <div class="panel panel-default">
         <div class="panel-body">
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="">Nama Kategori</label>
             </div>
             <input type="text" name="nama_kategori" value="<?php echo $row['nama_kategori']; ?>">
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

 <?php
   include 'footer.php';

  ?>
