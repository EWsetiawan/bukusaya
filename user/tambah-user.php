<?php
  include 'header.php';
  include 'config.php';
 ?>


 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Register 
       <small>- Bukusaya.com</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-user"></i> User</a></li>
       <li class="active">Register User</li>
     </ol>
   </section>

   <!-- Table -->
   <section class="content">

     <form class="" action="simpan-user.php" method="post" enctype="multipart/form-data">
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
               <label for="Username">Username</label>
             </div>
             <input type="text" name="user" value="">
           </div>
           <br>
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="password">password</label>
             </div>
             <input type="password" name="password" value="">
           </div>
           <br>
           <div class="col-md-12">
             <div class="col-md-2">
               <label for="foto">Foto</label>
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