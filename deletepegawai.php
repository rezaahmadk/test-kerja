<?php 
	require_once('database/libraryPegawai.php');

	$id = 0;
	if(!empty($_GET['id']))
	{
		$idPegawai = $_REQUEST['id'];
		$delete = new LibraryPegawai();
		$delete->DeletePegawai($idPegawai);
	}
?>