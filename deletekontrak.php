<?php 
	require_once('database/libraryKontrak.php');

	$id = 0;
	if(!empty($_GET['id']))
	{
		$idKontrak = $_REQUEST['id'];
		$delete = new LibraryKontrak();
		$delete->DeleteKontrak($idKontrak);
	}
?>