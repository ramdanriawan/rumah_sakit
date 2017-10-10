<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../konfig.php';
extract($_POST);
$query = "INSERT INTO `dokter` (`nama_dokter`, `alamat`, `no_tlp`) 
VALUES ('$nama_dokter', '$alamat', '$no_tlp')";

mysql_query($query);   