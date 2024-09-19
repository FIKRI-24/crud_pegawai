<?php
  session_start();
  ob_start();
  
  include "library/config.php";

  if(empty($_SESSION['username']) or empty($_SESSION['password'])){
     echo "<p align='center'> Anda harus login terlebih dahulu!</p>";
     echo "<meta http-equiv='refresh' content='0; url=login.php'>";
  }else{
    define('INDEX', true);
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <title>Dashboard</title>
   
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/icon/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/DataTables/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <link href="vendor/summernote/summernote-bs4.css" rel="stylesheet">


   </head>
   <body class="h-100">
      <nav class="navbar navbar-expand-sm navbar-dark sticky-top bg-info">
         <a class="navbar-brand col-md-2 col-lg-2 px-3" href="#">Manajemen Pegawai</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#sidebar" aria-controls="sidebar" 
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
      </nav>
   
      <div class="container-fluid">
        <div class="row">
         <nav class="col-md-2 col-sm-4 bg-dark h-100 p-0 position-fixed 
            collapse d-sm-block" id="sidebar" style="z-index:1000">
            
<ul class="list-group list-group-flush">
	<li class="list-group-item bg-dark"> 
	   <a class="nav-link text-white" href="?hal=dashboard">
		  <i class="bi bi-speedometer2"></i> Dashboard
	   </a>
	</li>
	<li class="list-group-item bg-dark"> 
	   <a class="nav-link text-white" href="?hal=pegawai">
		  <i class="bi bi-person-square"></i> Data Pegawai
	   </a> 
	</li>
	<li class="list-group-item bg-dark"> 
	   <a class="nav-link text-white" href="?hal=jabatan">
		  <i class="bi bi-star-fill"></i> Data Jabatan
	   </a> 
	</li>
	<li class="list-group-item bg-dark"> 
	   <a class="nav-link text-white" href="logout.php">
		  <i class="bi bi-power"></i> Keluar
	   </a> 
	</li>
</ul>
                     
         </nav>

         <div class="col-md-10 col-sm-8 offset-md-2 offset-sm-4 py-3">  
            <section class="pb-4">
               <?php include "konten.php"; ?>
            </section>
         </div>
        </div>
      </div>
     
     <div class="bg-light fixed-bottom">
      <p class="p-2 text-center text-muted">Copyright &copy; Rohi Abdulloh</p>
     </div>
     
     <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

     <script src="vendor/jQuery/jquery.min.js"></script>  
     <script src="vendor/DataTables/js/jquery.dataTables.min.js"></script>
     <script src="vendor/DataTables/js/dataTables.bootstrap4.min.js"></script>

     <script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
     <script src="vendor/summernote/summernote-bs4.min.js"></script>

     <script src="js/app.js"></script>
   </body>
</html>
<?php
   }
?>