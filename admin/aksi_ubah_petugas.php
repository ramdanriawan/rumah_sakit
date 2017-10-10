<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../konfig.php';
extract($_POST);
$query = "update petugas_radiografer set kode_petugas='$kode_petugas', nama_petugas='$nama_petugas', pendidikan = '$pendidikan' where nip_radiografer='$nip' ";
mysql_query($query);
header("location:../admin.php?view=tampil_petugas");

