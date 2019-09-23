<?php
	include'header.php';
?>

<section class="content">
<h1>Checkout</h1>
     <form class="" action="simpan-checkout.php" method="post" enctype="multipart/form-data">
       <div class="panel panel-default">
         <div class="panel-body">
         
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="nama">Nama</label>
             </div>
             <input type="text" name="nama" value="">
           </div>
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="Username">Alamat</label>
             </div>
             <input type="text" name="alamat" value="">
           </div>
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="Username">kecamatan</label>
             </div>
             <input type="text" name="kecamatan" value="">
           </div>
           <br>
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="password">Kota</label>
             </div>
             <input type="text" name="kota" value="">
           </div>
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="Username">Kode Pos</label>
             </div>
             <input type="text" name="kodepos" value="">
           </div>
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="Username">No Handphone</label>
             </div>
             <input type="text" name="no" value="">
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