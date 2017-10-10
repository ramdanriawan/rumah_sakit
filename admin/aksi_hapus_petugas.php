<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'konfig.php';
$id = $_GET['nip'];
$query = "delete from petugas_radiografer where nip_radiografer='$id' ";
mysql_query($query);
?>
<script type="text/javascript">
location.href = 'admin.php?view=tampil_petugas';
</script>

