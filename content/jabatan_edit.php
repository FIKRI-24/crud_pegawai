<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "SELECT * FROM jabatan WHERE id_jabatan='$_GET[id]'");
   $data = mysqli_fetch_array($query);
?>

<h3 class="border-bottom pb-3 mb-3">Edit Jabatan</h3>

<form method="post" action="?hal=jabatan_update">
   <input type="hidden" name="id" value="<?= $data['id_jabatan'] ?>">

   <div class="row mt-3">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>   
      <div class="col-sm-4">
         <input class="form-control" type="text" id="nama" name="nama" value="<?= $data['nama_jabatan'] ?>">
      </div> 
   </div>

   <div class="mt-3">
      <button type="submit" class="btn btn-info"><i class="bi bi-save-fill"></i> Simpan</button>
      <button type="reset" class="btn btn-warning"><i class="bi bi-x-circle-fill"></i> Batal</button>
   </div>
</form>