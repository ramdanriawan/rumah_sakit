<html>
<head>
	<title>Laporan Pendaftaran</title>
<head>
<body>
<h1>Laporan Pendaftaran</h1>

<a hreaf="print.php">cetak Data</a>
<br><br>

<table border="1" cellspacing="8">
<tr>
	<th>No RM</th>
	<th>Nama Pasien</th>
	<th>Alamat/th>
	<th>Jenis Kelamin</th>
	<th>Tgl Lahir</th>
	<th>Jenis Pasien</th>
	<th>Jenis Tindakan</th>
	<th>Jenis Pelayanan</th>
	<th>Cara Bayar</th>
	<th>Nama Dokter</th>
</tr>


<?php
//Load file "konfig.php";
$query= "SELECT *FROM pendafataran";
	$sql = mysql_query($query);
	$row = mysqli_num_rows($sql);
	if ($row >0){
		while ($data=mysqli_fetch_array($slq)){
			echo "<tr>";
			echo "<td>".$data['no_rm']." </td>":
			echo "<td>".$data['nama_pasien']."</td>";
			echo "<td>".$data['Alamat']." </td>":
			echo "<td>".$data['jns_kelamin']." </td>":
			echo "<td>".$data['tgl_lahir']." </td>"
			echo "<td>".$data['ns_pasiien']." </td>":
			echo "<td>".$data['jns_tindakan']." </td>":
			echo "<td>".$data['jns_pelayanan']." </td>":
			echo "<td>".$data['ara_bayar']." </td>":
			echo "<td>".$data['nama_dokter']." </td>":
		}
	}else 
		echo "<tr><td colspan="4" > Data tidak ada</td></tr>
		}
		?>
</table>
</body>
</html>
			
