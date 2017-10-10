<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../konfig.php';
extract($_POST);
$query = "update tbl_user set username='$username', alamat='$alamat', hak_akses = '$hak_akses', no_telp= '$no_telepon' where id_user='$id_user' ";
mysql_query($query);
header("location:../admin.php?view=tampil_user");

