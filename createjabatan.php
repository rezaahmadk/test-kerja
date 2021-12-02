<!DOCTYPE html>
<html>
<head>
	<title>Menambah Data Jabatan Pegawai</title>
	<link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.css">

  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<?php 
	require_once('database/libraryJabatanPegawai.php');
	
	if(isset($_POST['simpan'])){
		$insert = new LibraryJabatanPegawai();
		$JabatanPegawai = $_POST['JabatanPegawai'];
		$insert->CreateJabatanPegawai($JabatanPegawai);
	}
?>
<body>
	<div class="container-fluid main row mx-0" id="nav-header">
        <nav class="nav col-auto mr-auto">
            <a class="nav-link" href="pegawai.php"></i>Pegawai</a>
            <a class="nav-link" href="jabatan.php"></i>Jabatan Pegawai</a>
            <a class="nav-link" href="kontrak.php"></i>Kontrak</a>
        </nav>
    </div>

    <main role="main" class="container-fluid main mt-2 mb-2">
		<div class="card">
	  		<div class="card-header">
		    	<center><strong>Menambah Data Jabatan Pegawai</strong></center>
		  	</div>
		  	<div class="card-body">
			    <form method="post" action="createjabatan.php">
	        		<div class="form-group">     
	        			<label for="JabatanPegawai">Jabatan Pegawai</label> 	
					      <input name="JabatanPegawai" class="form-control" type="text" placeholder="Masukkan Jabatan Pegawai" autocomplete="off" required="">
					</div>
					<center>
        				<button type="submit" name="simpan" class="btn btn-primary btn-block">Simpan</button>
        			</center>
            	</form>
		  	</div>
		</div>
	</main>
</body>
</html>

<style type="text/css">
	#nav-header {
		background-color: #333;
	}
	#nav-header a {
		color: #FFF;
	}
	#nav-header a:hover {
		color: #999;
	}

	.card-header{
		background-color: #999;
		color: #FFFFFF;
	}
</style>