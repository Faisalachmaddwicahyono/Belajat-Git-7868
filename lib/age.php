<?php
	require_once('lib/DBclass.php');
	require_once('lib/SiswaClass.php');
	class age{

		private $db;

		public function Age(){
			$this->db = new DBclass();
		}

		public function umur(){
			$siswa = new Siswa();
			$data = $siswa->readAllSiswa();
			$ob = $data['date_ob'];
			$ob1 = new DateTime($ob);
			$tgl = new DateTime();
			$hasil = $tgl->diff($ob1);
			return $hasil;
		}
	}
?>