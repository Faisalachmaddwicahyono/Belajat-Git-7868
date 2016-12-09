<?php
	require_once('lib/DBClass.php');
	class Siswa{
		
		private $db;

		public function Siswa(){
			$this->db = new DBclass();
		}

		public function readAllSiswa(){
			$query = "SELECT * FROM siswa s join nationality n ON s.id_nationality = n.id_nationality";
			return $this->db->getRows($query);
		}

		public function readSiswa($id){
			$query = "SELECT * FROM siswa s join nationality n ON s.id_nationality = n.id_nationality WHERE id_siswa =". $id;
			return $this->db->getRows($query);
		}

		public function createSiswa($id_nationality, $nis, $full_name, $email, $ff){
			$query = "INSERT INTO siswa (id_nationality, nis, full_name, email, foto) VALUES('$id_nationality', '$nis', '$full_name', '$email', '$ff')";
			return $this->db->putRows($query);
		}

		public function updateSiswa($id, $data){
			$name = $data['input_name'];
			$email = $data['input_email'];
			$nation = $data['input_nationality'];
			$foto = $data['foto'];

			$query = "UPDATE siswa SET full_name = '$name', email = '$email', foto = '$foto'";
			 if($nation>0) $query.= ",id_nationality= '$nation'";
			 $query.= " WHERE id_siswa=$id";
			return $this->db->putRows($query);
		}

		public function deleteSiswa($id){
			$sql = "DELETE FROM siswa WHERE id_siswa = '$id'";
			return $this->db->putRows($sql);
		}
	}
?>