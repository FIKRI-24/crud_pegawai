<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "DELETE FROM jabatan WHERE id_jabatan='$_GET[id]'");

   if($query){
      echo "<div class='alert alert-success'>Data berhasil dihapus!</div>";
      echo "<meta http-equiv='refresh' content='1; url=?hal=jabatan'>";
   }else{
      echo "<div class='alert alert-danger'>Tidak dapat menghapus data!<br>";
      echo mysqli_error();
      echo "</div>";
   }
?>