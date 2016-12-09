<?php
	require_once('lib/DBclass.php');
	require_once('lib/SiswaClass.php');

	if(!isset($_POST['kirim'])){
		exit('Access Forbiden');
	}

	$siswa = new Siswa();

	if(!copy($_FILES['in_foto']['tmp_name'], 'img/'.$_POST['in_nis'].'.png')){
		exit('Error Upload File');
	}

	$data['input_name'] = $_POST['in_name'];
	$data['input_email'] = $_POST['in_email'];
	$data['input_nationality'] = $_POST['in_nation'];
	$data['foto'] = 'img/'.$_POST['in_nis'].'.png';

	$siswa->updateSiswa($_POST['in_nis'], $data);

	echo "Data Siswa Berhasil Diupdate<br />";
	echo "<a href='readsiswa.php?a=".$_POST['in_nis']."'>Detail Siswa</a>";
?>