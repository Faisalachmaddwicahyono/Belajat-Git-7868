<?php
	require_once('lib/DBclass.php');
	require_once('lib/SiswaClass.php');

	$id = $_GET['a'];
	if(!is_numeric($id)){
		exit('Access Forbiden');
	}
	$siswa = new Siswa();
	$data = $siswa->deleteSiswa($id);

	if(empty($data)){
		echo "Data berhasil dihapus";
	}
?>
<br />
<a href="siswa.php">BACK</a>