<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../konfig.php';
extract($_POST);
$query = "INSERT INTO `pembayaran`(null,`$cara_bayar`,`$tarif`)
VALUES(null,`$cara_bayar`,`$tarif`) ";
mysql_query($query);
header("location:../departemen.php?view=tampil_pembayaran");

