<?php
   if(!defined('INDEX')) die("");
?>

<h3 class="border-bottom pb-3 mb-3">Tambah Jabatan</h3>

<form method="post" action="?hal=jabatan_insert">
   
   <div class="row mt-3">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>   
      <div class="col-sm-4">
		   <input class="form-control" type="text" id="nama" name="nama">
	   </div> 
   </div>

   <div class="mt-3">
      <button type="submit" class="btn btn-info"><i class="bi bi-save-fill"></i> Simpan</button>
      <button type="reset" class="btn btn-warning"><i class="bi bi-x-circle-fill"></i> Batal</button>
   </div>
</form>