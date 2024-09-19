<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "UPDATE jabatan SET
      nama_jabatan = '$_POST[nama]'
   WHERE id_jabatan='$_POST[id]'");

   if($query){
      echo "<div class='alert alert-success'>Data berhasil disimpan!</div>";
      echo "<meta http-equiv='refresh' content='1; url=?hal=jabatan'>";
   }else{
      echo "<div class='alert alert-danger'>Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
      echo "</div>";
   }
?>