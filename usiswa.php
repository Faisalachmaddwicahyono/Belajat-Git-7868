<?php
	require_once('lib/DBclass.php');
	require_once('lib/SiswaClass.php');
	require_once('lib/m_nationality.php');

	$id = $_GET['a'];
	if(!is_numeric($id)){
		exit('Access Forbiden');
	}
	$siswa = new Siswa();
	$data = $siswa->readSiswa($id);

	$nation = new nationality();
	$data_nation = $nation->readAllNationality();

	if(empty($data)){
		exit('Siswa is not found');
	}

	$dt = $data[0];
?>

<h1>Edit Data Siswa</h1>
<form action="editsiswa.php" method="post" enctype="multipart/form-data">
	NIS:<br />
	<input type="text" value="<?php echo $dt['id_siswa']?>" name="in_nis" readonly="true"><br />
	Nama Lengkap:<br />
	<input type="text" value="<?php echo $dt['full_name']?>" name="in_name"><br />
	Email:<br />
	<input type="text" value="<?php echo $dt['email']?>" name="in_email"><br />
	Kewarganegaraan:<br />
	<select name="in_nation">
		<option value=""><?php echo $dt['nationality']?> </option>
		<?php foreach($data_nation as $n): ?>
		<option value="<?php echo $n['id_nationality']?> ">
			<?php echo $n['nationality']?>
		</option>
		<?php endforeach?>
	</select><br />
	Foto:<br />
	<input	type="file" name="in_foto"><br/><br />
	<input type="submit" name="kirim" value="simpan">
</form>