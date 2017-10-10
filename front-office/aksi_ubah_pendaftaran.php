<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../konfig.php';
extract($_POST);
$query = "UPDATE `pendaftaran` SET nama_pasien='$nama_pasien', no_rm='$no_rm',tgl_daftar='$tgl_daftar',
 `jenis_pasien`='$jenis_pasien', `jenis_tindakan`='$jenis_tindakan', `jenis_pelayanan`='$jenis_pelayanan',  
`ukuran`='$ukuran', `tempat_daftar`='$tempat_daftar' WHERE (`id_pasien`='$id_pasien')";
mysql_query($query);
header("location:../front-office.php?view=tampil_pendaftaran");

