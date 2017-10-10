<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../konfig.php';
extract($_POST);
$query = "INSERT INTO `tbl_pasien` (`nama_pasien`, `alamat`, `jenis_kelamin`, `no_telepon`, `tgl_lahir`, `jenis_pasien`, `jenis_tindakan`, `jenis_pelayanan`, `cara_bayar`, `keterangan`) 
VALUES ('$nama', '$alamat', '$jenis_kelamin', '$no_telepon', '$tgl_lahir', '$jenis_pasien', '$jenis_tindakan', '$jenis_pelayanan', '$cara_bayar
	', '$keterangan')";

mysql_query($query);   