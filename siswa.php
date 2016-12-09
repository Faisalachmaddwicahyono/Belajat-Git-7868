<?php
	require_once('lib/DBclass.php');
	require_once('lib/SiswaClass.php');

	$siswa = new Siswa();
	$data = $siswa->readAllSiswa();

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
			<th width="200">Nationality</th>
			<th>Details</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php
			foreach ($data as $row):
				echo "<tr>";
				echo "<td>".$row['id_siswa']."</td>";
				echo "<td>".$row['full_name']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "<td>".$row['nationality']."</td>";
				echo "<td><a href='readsiswa.php?a=".$row['id_siswa']."'>Details</a></td>";
				echo "<td><a href='usiswa.php?a=".$row['id_siswa']."'>Edit</a></td>";
				echo "<td><a href='delsiswa.php?a=".$row['id_siswa']."'>Delete</a></td";
				echo "</tr>";
			endforeach;
		?>
</table>