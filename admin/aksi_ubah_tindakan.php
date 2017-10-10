<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../konfig.php';
extract($_POST);
$query = "UPDATE `jenis_tindakan` SET jenis_tindakan='$jenis_tindakan', tarif='$tarif' WHERE (`kode_tindakan`='$kode_tindakan')";
mysql_query($query);
header("location:../admin.php?view=tampil_tindakan");

