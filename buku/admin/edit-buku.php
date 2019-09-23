<?php
  include 'header.php';
  include 'config.php';

  //Memerika Id User yang telah Di Click/Lempar
//Jika Ada Perintah Dijalankan
if(isset($_GET['id'])){
  $id = $_GET['id'];


  $query = "SELECT * FROM buku WHERE id = '$id'";
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
       Input Buku
       <small>- Bukusaya.com</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li class="active">Input Buku</li>
     </ol>
   </section>

   <!-- Table -->
   <section class="content">

     <form class="" action="edit.php?id=<?php echo $row['id']; ?>" method="post">
       <div class="panel panel-default">
         <div class="panel-body">
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="">Kategori</label>
             </div>
             <?php
              $query2 = "SELECT * FROM kategori";
              $result2 = mysqli_query($koneksi,$query2);
              echo '<select class="" name="kategori">';
              while($row2 = mysqli_fetch_array($result2 , MYSQLI_ASSOC)){
                echo '<option value="'.$row2['id_kategori'].'">'.$row2['nama_kategori'].'</option>';
              }
              echo '</select>';
              ?>
           </div>
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="">Nama Buku</label>
             </div>
             <input type="text" name="nama_buku" value="<?php echo $row['nama_buku']; ?>">
           </div>
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="">Deskripsi</label>
             </div>
             <textarea name="deskripsi"><?php echo $row['deskripsi']; ?></textarea>
           </div>
           <br>
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="">Harga</label>
             </div>
             <input type="text" name="harga" value="<?php echo $row['harga']; ?>">
           </div>
           <br>
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="">Stok</label>
             </div>
             <input type="text" name="stok" value="<?php echo $row['stok']; ?>">
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
