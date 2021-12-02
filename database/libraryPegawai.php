<?php 
	include_once('config.php');
	class LibraryPegawai{
		private $conn;
		public function __construct(){
			$this->conn = new Db_config();
		}
		public function __destruct(){
			$this->conn = null;
		}

		public function ReadPegawai(){
			$query = "SELECT pegawai.id, pegawai.NamaPegawai, pegawai.KodePegawai, jabatan_pegawai.JabatanPegawai, kontrak.LamaKontrak FROM pegawai INNER JOIN jabatan_pegawai ON pegawai.JabatanPegawai=jabatan_pegawai.id INNER JOIN kontrak ON pegawai.LamaKontrak=kontrak.id ORDER BY pegawai.NamaPegawai ASC";
			return mysqli_query($this->conn->connection, $query);
		}

		public function CreatePegawai($NamaPegawai, $KodePegawai, $JabatanPegawai, $LamaKontrak){
			$query = "INSERT INTO pegawai (NamaPegawai, KodePegawai, JabatanPegawai, LamaKontrak) VALUES ('$NamaPegawai','$KodePegawai','$JabatanPegawai','$LamaKontrak')";
			$result = mysqli_query($this->conn->connection, $query);
			if($result){
				echo '<script type="text/javascript">alert("Berhasil Menyimpan Data.");</script>';
				echo '<script type="text/javascript">window.location.href = "pegawai.php";</script>';
			}
			else{
				echo '<script type="text/javascript">alert("Gagal Menyimpan Data.");</script>';
			}
		}

		public function ReadUpdatePegawai($id){
			$query = "SELECT * FROM pegawai WHERE id='$id'";
			return mysqli_query($this->conn->connection, $query);
		}

		public function UpdatePegawai($id, $NamaPegawai, $KodePegawai, $JabatanPegawai, $LamaKontrak){
			$query = "UPDATE pegawai SET NamaPegawai='$NamaPegawai', KodePegawai='$KodePegawai', JabatanPegawai='$JabatanPegawai', LamaKontrak='$LamaKontrak' WHERE id='$id'";
			$result = mysqli_query($this->conn->connection, $query);
			if($result){
				echo '<script type="text/javascript">alert("Berhasil Mengubah Data.");</script>';
				echo '<script type="text/javascript">window.location.href = "pegawai.php";</script>';
			}
			else{
				echo '<script type="text/javascript">alert("Gagal Mengubah Data.");</script>';
			}
		}
		
		public function DeletePegawai($id){
			$query = "DELETE FROM pegawai WHERE id='$id'";
			$result = mysqli_query($this->conn->connection, $query);
			if($result){
				echo '<script type="text/javascript">alert("Berhasil Menghapus Data.");</script>';
				echo '<script type="text/javascript">window.location.href = "pegawai.php";</script>';
			}
			else{
				echo '<script type="text/javascript">alert("Gagal Menghapus Data.");</script>';
			}
		}
	}
?>