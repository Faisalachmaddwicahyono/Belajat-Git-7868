<?php
	require_once('lib/DBclass.php');
	require_once('lib/SiswaClass.php');

	$id = $_GET['a'];
	if(!is_numeric($id)){
		exit('Access Forbiden');
	}
	$siswa = new Siswa();
	$data = $siswa->readSiswa($id);
	if(empty($data)){
		exit('Data Not Found');
	}
	$dt = $data[0];
?>
<html>
<table border="2">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Nationality</th>
		</tr>
		<?php
			foreach ($data as $row):
				echo "<tr>";
				echo "<td>".$row['id_siswa']."</td>";
				echo "<td>".$row['full_name']."</td>";
				echo "<td>".$row['nationality']."</td>";
				echo "</tr>";
			endforeach;
		?>
</table>
<a href='siswa.php'>Kembali</a>