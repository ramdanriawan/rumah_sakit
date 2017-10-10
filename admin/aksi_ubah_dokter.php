<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../konfig.php';
extract($_POST);
$query = "UPDATE `dokter` SET nama_dokter='$nama_dokter', alamat='$alamat',  `no_tlp`='$no_tlp' WHERE (`id_dokter`='$id_dokter')
";
mysql_query($query);
header("location:../admin.php?view=tampil_dokter");

