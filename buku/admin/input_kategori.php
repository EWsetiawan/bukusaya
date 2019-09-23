<?php
include 'config.php';
include 'header.php';

?>



 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Input Kategori
       <small>- Bukusaya.com</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-book"></i> Kategori</a></li>
       <li class="active">Input Kategori</li>
     </ol>
   </section>

   <!-- Table -->
   <section class="content">

     <form class="" action="simpan-kategori.php" method="post">
       <div class="panel panel-default">
         <div class="panel-body">
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="">Kategori</label>
             </div>
             <input type="text" name="nama_kategori" value="">
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
include'footer.php'
?>

