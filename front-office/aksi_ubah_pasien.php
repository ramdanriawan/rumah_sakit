<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../konfig.php';
extract($_POST);
$query = "UPDATE `tbl_pasien` SET nama_pasien='$nama', alamat='$alamat', jenis_kelamin = '$jenis_kelamin', 
no_telepon = '$no_telepon', `jenis_pasien`='$jenis_pasien', `jenis_tindakan`='$jenis_tindakan', `jenis_pelayanan`='$jenis_pelayanan', 
`cara_bayar`='$cara_bayar', `keterangan`='$keterangan' WHERE (`no_rm`='$id_pasien')";
mysql_query($query);
header("location:../front-office.php?view=tampil_pasien");

