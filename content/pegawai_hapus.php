<?php
   if(!defined('INDEX')) die("");

   if(file_exists("images/$_GET[foto]")) unlink("images/$_GET[foto]");
   $query = mysqli_query($con, "DELETE FROM pegawai WHERE id_pegawai='$_GET[id]'");

   if($query){
      echo "<div class='alert alert-success'>Data berhasil dihapus!</div>";
      echo "<meta http-equiv='refresh' content='1; url=?hal=pegawai'>";
   }else{
      echo "<div class='alert alert-danger'>Tidak dapat menghapus data!<br>";
      echo mysqli_error();
      echo "</div>";
   }
?>