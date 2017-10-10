<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'konfig.php';
$id_pasien = $_GET['id_pasien'];
$query = "delete from tbl_pasien where no_rm='$id_pasien'";
mysql_query($query);
header("location:admin.php?view=tampil_pasien");

