<?php 
	include_once('config.php');
	class LibraryJabatanPegawai{
		private $conn;
		public function __construct(){
			$this->conn = new Db_config();
		}
		public function __destruct(){
			$this->conn = null;
		}

		public function ReadJabatanPegawai(){
			$query = "SELECT * FROM jabatan_pegawai ORDER BY JabatanPegawai ASC";
			return mysqli_query($this->conn->connection, $query);
		}

		public function ReadSelectJabatanPegawai(){
			$query = "SELECT id AS idJabatanPegawai, JabatanPegawai FROM jabatan_pegawai ORDER BY JabatanPegawai ASC";
			return mysqli_query($this->conn->connection, $query);
		}

		public function CreateJabatanPegawai($JabatanPegawai){
			$query = "INSERT INTO jabatan_pegawai (JabatanPegawai) VALUES ('$JabatanPegawai')";
			$result = mysqli_query($this->conn->connection, $query);
			if($result){
				echo '<script type="text/javascript">alert("Berhasil Menyimpan Data.");</script>';
				echo '<script type="text/javascript">window.location.href = "jabatan.php";</script>';
			}
			else{
				echo '<script type="text/javascript">alert("Gagal Menyimpan Data.");</script>';
			}
		}

		public function ReadUpdateJabatanPegawai($id){
			$query = "SELECT * FROM jabatan_pegawai WHERE id='$id'";
			return mysqli_query($this->conn->connection, $query);
		}

		public function UpdateJabatanPegawai($id, $JabatanPegawai){
			$query = "UPDATE jabatan_pegawai SET JabatanPegawai='$JabatanPegawai' WHERE id='$id'";
			$result = mysqli_query($this->conn->connection, $query);
			if($result){
				echo '<script type="text/javascript">alert("Berhasil Mengubah Data.");</script>';
				echo '<script type="text/javascript">window.location.href = "jabatan.php";</script>';
			}
			else{
				echo '<script type="text/javascript">alert("Gagal Mengubah Data.");</script>';
			}
		}
		
		public function DeleteJabatanPegawai($id){
			$query = "DELETE FROM jabatan_pegawai WHERE id='$id'";
			$result = mysqli_query($this->conn->connection, $query);
			if($result){
				echo '<script type="text/javascript">alert("Berhasil Menghapus Data.");</script>';
				echo '<script type="text/javascript">window.location.href = "jabatan.php";</script>';
			}
			else{
				echo '<script type="text/javascript">alert("Gagal Menghapus Data.");</script>';
			}
		}
	}
?>