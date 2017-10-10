<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../konfig.php';
extract($_POST);
$query = "insert into pemeriksaan values('$id_pasien','$no_rm','$nip_radiografer','$kode_tindakan','$hasil','$tgl_daftar','',$jumlah_tindakan)  ";
mysql_query($query);
echo "insert into pemeriksaan values('$id_pasien','$no_rm','$nip_radiografer','$kode_tindakan','$hasil','$tgl_daftar','',$jumlah_tindakan)";
// header("location:../dokter.php?view=tampil_pasien_dokter");

