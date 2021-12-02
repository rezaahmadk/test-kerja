<!DOCTYPE html>
<html>
<head>
	<title>Kontrak</title>
  	<link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.css">

  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid main row mx-0" id="nav-header">
        <nav class="nav col-auto mr-auto">
            <a class="nav-link" href="pegawai.php"></i>Pegawai</a>
            <a class="nav-link" href="jabatan.php"></i>Jabatan Pegawai</a>
            <a class="nav-link" href="kontrak.php"></i>Kontrak</a>
        </nav>
    </div>

    <main role="main" class="container-fluid main">
		<div class="jumbotron py-2 px-2 mt-3 mb-2">
			<div class="navbar pl-0 pr-0 pt-0">
				<ul class="nav">
		  			<li class="nav-item">
		    			<a class="btn btn-success" href="createkontrak.php">Tambah Kontrak</a>
		  			</li>
		  		</ul>
			</div>

			<table class="table table-sm py-0 px-2 my-0" id="table-kontrak">
			  	<thead>
				    <tr>
				      	<th width="10px">#</th>
				      	<th width="80%">Lama Kontrak</th>
				      	<th class="aksi" width="50px">Aksi</th>
				    </tr>
			  	</thead>
			  	<tbody>
			  	<?php
			  		require_once('database/libraryKontrak.php');
					$read = new LibraryKontrak();
					$result = $read->ReadKontrak();

					$number = 1;
					foreach($result as $row){
						echo '<tr>';
							echo '<td>'.$number.'</td>';
							echo '<td>'.$row['LamaKontrak'].'</td>';
							echo '<td>';
								echo '<a class="btn btn-sm btn-info mr-2" id="button-aksi" href="updatekontrak.php?id='.$row['id'].'">Ubah</a>';
								echo '<a class="btn btn-sm btn-danger" id="button-aksi" onclick="myFunction('.$row['id'].')">Hapus</a>';
							echo '</td>';
						echo '</tr>';
						$number++;
					}
				?>
				</tbody>
			</table>
		</div>
	</main>
</body>
</html>

<script type="text/javascript">
	function myFunction(id){
		var r = confirm("Hapus Data Kontrak?");
		var idk = id;
		if(r == true){
		    window.location.href = "deletekontrak.php?id="+idk;
		}
	};
</script>

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

	#table-kontrak {
		background-color: #fff;
	}

	#button-aksi {
		color: #000000;
	}
	#button-aksi:hover {
		color: #ffffff;
	}
</style>