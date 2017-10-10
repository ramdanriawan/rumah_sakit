<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../konfig.php';
extract($_POST);
$query = "update pembayaran set cara_bayar = '$cara_bayar', tarif='$tarif' where id_bayar='$id_bayar' ";
mysql_query($query);
header("location:../departemen.php?view=tampil_pembayaran");

