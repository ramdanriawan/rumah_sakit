<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include '../konfig.php';
extract($_POST);
$cek_id_dokter = mysql_query("select id_user, nama_dokter from tbl_dokter where nama_dokter = '".$_SESSION['grup']."'");
$dokter = mysql_fetch_array($cek_id_dokter);

$query = "insert into tbl_resep values(null,'".$dokter['id_user']."','$id_pasien','$nama_resep', '$rincian_resep', null)";
mysql_query($query);   
header("location:../dokter.php?view=tampil_resep");