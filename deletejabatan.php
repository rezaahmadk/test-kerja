<?php 
	require_once('database/libraryJabatanPegawai.php');

	$id = 0;
	if(!empty($_GET['id']))
	{
		$idJabatanPegawai = $_REQUEST['id'];
		$delete = new LibraryJabatanPegawai();
		$delete->DeleteJabatanPegawai($idJabatanPegawai);
	}
?>