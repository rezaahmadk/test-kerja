<!DOCTYPE html>
<html>
<head>
	<title>Mengubah Data Kontrak</title>
	<link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.css">

  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<?php 
	require_once('database/libraryKontrak.php');

	$id = null;
	if(!empty($_GET['id'])){
		$idKontrak = $_REQUEST['id'];
	}

	if(isset($_POST['ubah'])){
		$update = new LibraryKontrak();
		$LamaKontrak = $_POST['LamaKontrak'];
		$update->UpdateKontrak($idKontrak, $LamaKontrak);
	}
	else{
		$read = new LibraryKontrak();
		$result = $read->ReadUpdateKontrak($idKontrak);
		$list = mysqli_fetch_array($result);
		$LamaKontrak = $list['LamaKontrak'];
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

    <main role="main" class="container-fluid main mt-2">
		<div class="card">
	  		<div class="card-header">
		    	<center><strong>Mengubah Data Kontrak</strong></center>
		  	</div>
		  	<div class="card-body">
			    <form method="post" action="updatekontrak.php?id=<?php echo $idKontrak?>">
	        		<div class="form-group">     
	        			<label for="LamaKontrak">Lama Kontrak</label> 	
					    <input name="LamaKontrak" class="form-control" type="text" placeholder="Masukkan Lama Kontrak" autocomplete="off" required="" value="<?php echo !empty($LamaKontrak)?$LamaKontrak:'';?>">
					</div>
					<center>
        				<button type="submit" name="ubah" class="btn btn-primary btn-block"><i class="fas fa-pen"></i> Ubah</button>
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