<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../konfig.php';
extract($_POST);
$query = "insert into tbl_user  values(null,'$username','$username',0, '$hak_akses','',$alamat', '$no_telepon') ";
mysql_query($query);   