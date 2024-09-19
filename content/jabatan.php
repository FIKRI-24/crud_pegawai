<?php
   if(!defined('INDEX')) die("");
?>

<h3 class="border-bottom pb-3 mb-3">Data Jabatan</h3>

<a class="btn btn-success" href="?hal=jabatan_tambah"><i class="bi bi-plus"></i> Tambah</a>

<div class="table-responsive mt-3 row">
<table class="table table-striped table-hover table-bordered">
   <thead class="bg-info">
      <tr>
         <th width="30">No</th>
         <th>Nama Jabatan</th>
         <th width="120">Aksi</th>
      </tr>
   </thead>
   <tbody>
<?php
   $query = mysqli_query($con, "SELECT * FROM jabatan ORDER BY id_jabatan DESC");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <td><?= $data['nama_jabatan'] ?></td>
         <td>
            <a class="btn btn-sm btn-info" href="?hal=jabatan_edit&id=<?= $data['id_jabatan'] ?>"> <i class="bi bi-pencil"></i> Edit </a>
            <a class="btn btn-sm btn-danger" href="?hal=jabatan_hapus&id=<?= $data['id_jabatan'] ?>"> <i class="bi bi-trash"></i> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>
</div>