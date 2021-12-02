<!DOCTYPE html>
<html>
<head>
	<title>Mengubah Data Pegawai</title>
	<link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.css">

  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<?php 
	require_once('database/libraryPegawai.php');

	$id = null;
	if(!empty($_GET['id'])){
		$idPegawai = $_REQUEST['id'];
	}

	if(isset($_POST['ubah'])){
		$update = new LibraryPegawai();
		$NamaPegawai = $_POST['NamaPegawai'];
		$KodePegawai = $_POST['KodePegawai'];
		$JabatanPegawai = $_POST['JabatanPegawai'];
		$LamaKontrak = $_POST['LamaKontrak'];
		$update->UpdatePegawai($idPegawai, $NamaPegawai, $KodePegawai, $JabatanPegawai, $LamaKontrak);
	}
	else{
		$read = new LibraryPegawai();
		$result = $read->ReadUpdatePegawai($idPegawai);
		$list = mysqli_fetch_array($result);
		$NamaPegawai = $list['NamaPegawai'];
		$KodePegawai = $list['KodePegawai'];
		$JabatanPegawai = $list['JabatanPegawai'];
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
		    	<center><strong>Mengubah Data Pegawai</strong></center>
		  	</div>
		  	<div class="card-body">
			    <form method="post" action="updatepegawai.php?id=<?php echo $idPegawai?>">
	        		<div class="form-group">     
	        			<label for="NamaPegawai">Nama Pegawai</label> 	
					    <input name="NamaPegawai" class="form-control" type="text" placeholder="Masukkan Nama Pegawai" autocomplete="off" required="" value="<?php echo !empty($NamaPegawai)?$NamaPegawai:'';?>">
					</div>
					<div class="form-group">     
	        			<label for="KodePegawai">Kode Pegawai</label> 	
					    <input name="KodePegawai" class="form-control" type="text" placeholder="Masukkan Kode Pegawai" autocomplete="off" required="" value="<?php echo !empty($KodePegawai)?$KodePegawai:'';?>">
					</div>
					<div class="form-group">
				  		<label for="JabatanPegawai">Jabatan Pegawai</label>
				  		<?php 
				  			require_once('database/libraryJabatanPegawai.php');
				  			$select = new LibraryJabatanPegawai();
				  			$result = $select->ReadSelectJabatanPegawai();

			                echo '<select name="JabatanPegawai" class="form-control">';
			                echo '<option disabled selected>Pilih Jabatan Pegawai</option>';
			                foreach ($result as $row) 
			                {    
			                    echo '<option value="'.$row['idJabatanPegawai'].'"';
			                    if($row['idJabatanPegawai'] == $JabatanPegawai){
			                    	echo 'selected="selected"';
			                    }
			                    echo '>'.$row['JabatanPegawai'].'</option>';
			                }
		                    echo '</select>';
				  		?>
				  	</div>
				  	<div class="form-group">
				  		<label for="LamaKontrak">Lama Kontrak</label>
				  		<?php 
				  			require_once('database/libraryKontrak.php');
				  			$select = new LibraryKontrak();
				  			$result = $select->ReadSelectKontrak();

			                echo '<select name="LamaKontrak" class="form-control">';
			                echo '<option disabled selected>Pilih Lama Kontrak</option>';
			                foreach ($result as $row) 
			                {    
			                    echo '<option value="'.$row['idLamaKontrak'].'"';
			                    if($row['idLamaKontrak'] == $LamaKontrak){
			                    	echo 'selected="selected"';
			                    }
			                    echo '>'.$row['LamaKontrak'].'</option>';
			                }
		                    echo '</select>';
				  		?>
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