<?php
	require_once('lib/DBclass.php');
	require_once('lib/SiswaClass.php');
	require_once('lib/age.php');



	$siswa = new Siswa();
	$data = $siswa->readAllSiswa();

	$age = new Age();
	$umur = $age->umur();
	//print '<pre>';
	//print_r($data);
	//print '</pre>';
?>
<html>
<table border="2">
		<tr>
			<th width="50">ID</th>
			<th width="250">Nama</th>
			<th width="200">Email</th>
			<th width="200">Date of Birth</th>
			<th width="200">Age</th>
			<th width="200">Nationality</th>
			<th>Details</th>
		</tr>
		<?php
			foreach ($data as $row):
				echo "<tr>";
				echo "<td>".$row['id_siswa']."</td>";
				echo "<td>".$row['full_name']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "<td>".$row['date_ob']."</td>";
				echo "<td>".$umur."</td>";
				echo "<td>".$row['nationality']."</td>";
				echo "<td><a href='readsiswa.php?a=".$row['id_siswa']."'>Details</a></td>";
				echo "</tr>";
			endforeach;
		?>
</table>