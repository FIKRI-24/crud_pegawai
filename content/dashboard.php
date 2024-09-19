<?php
   if(!defined('INDEX')) die("");
?>

<h3 class="border-bottom pb-3 mb-3">Dashboard</h3>

<?php
   $jml_pegawai = mysqli_num_rows(mysqli_query($con, "SELECT * FROM pegawai"));
   $jml_jabatan = mysqli_num_rows(mysqli_query($con, "SELECT * FROM jabatan"));
?>
<div class="row mb-3 pb-3">
   <div class="col-sm-6 mb-3">
      <div class="card">
         <div class="card-body bg-warning opacity-75">
            <i class="bi bi-person-square display-3"></i> 
            <span class="display-3 float-end"><?= $jml_pegawai ?></span> 
         </div>
         <div class="card-footer bg-warning active">
            <a href="?hal=jabatan" class="nav-link text-white">
            Data Pegawai
            <i class="bi bi-arrow-right float-end"></i> 
         </a>  
         </div>
      </div>
   </div>

   <div class="col-sm-6 mb-3">
      <div class="card">
         <div class="card-body bg-success opacity-75">
            <i class="bi bi-star display-3"></i> 
            <span class="display-3 float-end"><?= $jml_jabatan ?></span> 
         </div>
         <div class="card-footer bg-success active">
            <a href="?hal=jabatan" class="nav-link text-white">
            Data Jabatan
            <i class="bi bi-arrow-right float-end"></i> 
         </a>  
         </div>
      </div>
   </div>
</div>