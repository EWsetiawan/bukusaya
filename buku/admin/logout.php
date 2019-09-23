<?php
session_start();
unset($_SESSION['id']);
session_destroy();
echo '<script>window.alert("Terima Kasih Anda Berhasil Log Out");window.location=("login.php");</script>';

 ?>
