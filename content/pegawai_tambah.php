<?php
   if(!defined('INDEX')) die("");
?>

<h3 class="border-bottom pb-3 mb-3">Data Pegawai</h3>

<form method="post" action="?hal=pegawai_insert" enctype="multipart/form-data">
   
   <div class="row mt-3">
      <label class="col-sm-2 col-form-label">Foto</label>   
      <div class="col-sm-4">
        <input class="form-control" type="file" id="foto" name="foto">
      </div>
   </div>

   <div class="row mt-3">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>   
      <div class="col-sm-4">   
       <input class="form-control" type="text" id="nama" name="nama">
     </div> 
   </div>

   <div class="row mt-3">
      <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
     <div class="col-sm-4">   
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="jkl" name="jk" value="L"> 
          <label class="form-check-label" for="jkl">Laki-laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="jkp" name="jk" value="P"> 
          <label class="form-check-label" for="jkp">Perempuan</label>
        </div> 
     </div>
   </div>

   <div class="row mt-3">
      <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>   
      <div class="col-sm-2">   
        <input class="form-control" type="text" id="tanggal" name="tanggal">
     </div>
   </div>

   <div class="row mt-3">
      <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label> 
      <div class="col-sm-4">
        <select class="form-select" id="jabatan" name="jabatan">
          <option value=""> -Pilih Jabatan-</option>
          <?php
            $queryjabatan = mysqli_query($con, "SELECT * FROM jabatan");
            while($j = mysqli_fetch_array($queryjabatan)){
               echo "<option value='$j[id_jabatan]'>$j[nama_jabatan]</option>";
            }
          ?>
        </select>
      </div>
   </div>

   <div class="row mt-3">
      <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>   
      <div class="col-sm-8">
        <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
     </div>
   </div>

   <div class="mt-3">
      <button type="submit" class="btn btn-info"><i class="bi bi-save-fill"></i> Simpan</button>
      <button type="reset" class="btn btn-warning"><i class="bi bi-x-circle-fill"></i> Batal</button>
   </div>
</form>