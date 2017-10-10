<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../konfig.php';
extract($_POST);
$query = "INSERT INTO `pendaftaran` (`no_rm`,`nama_pasien`, `tgl_lahir`, `jenis_pelayanan`, `jenis_pasien`, `jenis_tindakan`, `tempat_daftar`, `ukuran`) 
VALUES ('$no_rm','$nama_pasien', '$tgl_lahir', '$jenis_pelayanan', '$jenis_pasien', '$jenis_tindakan', '$tempat_daftar', '$ukuran', '$jenis_pelayanan')";
mysql_query($query);  
header ("location:../front-office.php?view=tampil_pendaftaran");
