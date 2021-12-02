<?php 
	include_once('config.php');
	class LibraryKontrak{
		private $conn;
		public function __construct(){
			$this->conn = new Db_config();
		}
		public function __destruct(){
			$this->conn = null;
		}

		public function ReadKontrak(){
			$query = "SELECT * FROM kontrak ORDER BY LamaKontrak ASC";
			return mysqli_query($this->conn->connection, $query);
		}

		public function ReadSelectKontrak(){
			$query = "SELECT id AS idLamaKontrak, LamaKontrak FROM kontrak ORDER BY LamaKontrak ASC";
			return mysqli_query($this->conn->connection, $query);
		}

		public function CreateKontrak($LamaKontrak){
			$query = "INSERT INTO kontrak (LamaKontrak) VALUES ('$LamaKontrak')";
			$result = mysqli_query($this->conn->connection, $query);
			if($result){
				echo '<script type="text/javascript">alert("Berhasil Menyimpan Data.");</script>';
				echo '<script type="text/javascript">window.location.href = "kontrak.php";</script>';
			}
			else{
				echo '<script type="text/javascript">alert("Gagal Menyimpan Data.");</script>';
			}
		}

		public function ReadUpdateKontrak($id){
			$query = "SELECT * FROM kontrak WHERE id='$id'";
			return mysqli_query($this->conn->connection, $query);
		}

		public function UpdateKontrak($id, $LamaKontrak){
			$query = "UPDATE kontrak SET LamaKontrak='$LamaKontrak' WHERE id='$id'";
			$result = mysqli_query($this->conn->connection, $query);
			if($result){
				echo '<script type="text/javascript">alert("Berhasil Mengubah Data.");</script>';
				echo '<script type="text/javascript">window.location.href = "kontrak.php";</script>';
			}
			else{
				echo '<script type="text/javascript">alert("Gagal Mengubah Data.");</script>';
			}
		}
		
		public function DeleteKontrak($id){
			$query = "DELETE FROM kontrak WHERE id='$id'";
			$result = mysqli_query($this->conn->connection, $query);
			if($result){
				echo '<script type="text/javascript">alert("Berhasil Menghapus Data.");</script>';
				echo '<script type="text/javascript">window.location.href = "kontrak.php";</script>';
			}
			else{
				echo '<script type="text/javascript">alert("Gagal Menghapus Data.");</script>';
			}
		}
	}
?>